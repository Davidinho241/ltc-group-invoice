<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use App\Notification\CustomerNotification;
use App\Notification\TransactionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Kreait\Firebase\Factory;
use function PHPUnit\Framework\once;

class FirebaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factory = (new Factory)->withServiceAccount(public_path('firebase-config.json'))
            ->withDatabaseUri('https://ltc-group-invoice-default-rtdb.firebaseio.com');

        $auth = $factory->createAuth();
        $database = $factory->createDatabase();

        $services = $database->getReference('Services')
            ->getSnapshot();

        foreach ($services->getvalue() as $key => $value){
            echo '<pre>';
            print_r($value['title']);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param array $data
     * @param string $table
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, string $table)
    {
        $factory = (new Factory)->withServiceAccount(public_path('firebase-config.json'))
            ->withDatabaseUri('https://ltc-group-invoice-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();

        $newInsert = $database
            ->getReference($table)
            ->push($data);

        return $newInsert->getvalue();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $factory = (new Factory)->withServiceAccount(public_path('firebase-config.json'))
            ->withDatabaseUri('https://ltc-group-invoice-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $customer = new Customer([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $transaction = new Transaction([
            'billing_number' => 'invoice-'.rand(),
            'amount' => $request->amount,
            'customer' => $customer,
            'status' => Transaction::PENDING,
        ]);

        $service = $database->getReference('Services/'.$id.'/transactions')
            ->push($transaction);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'transaction_number' => $transaction->billing_number,
            'amount' => $transaction->amount,
        ];

        $user = new User($database->getReference('Users/-N4A7oJYzDkdlvEvQJY2')->getSnapshot()->getValue());
        Notification::send($user, new TransactionNotification($data));
        Notification::send($customer, new CustomerNotification([
            'billing_number' => $transaction->billing_number,
            'customer_name' => $customer->name,
            'route' => $this->paymentLink($transaction, $customer),
        ]));

        return response($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
