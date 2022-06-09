@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <h4>Service Transactions</h4>
                    <div class="box_right d-flex lms_block">
                        <div class="serach_field_2">
                            <div class="search_inner">
                                <form action="#">
                                    @csrf
                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here...">
                                    </div>
                                    <button type="submit"> <i class="ti-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="add_button ms-2">
                            <a href="#addBill" data-bs-toggle="modal" data-bs-target="#addBill" class="btn_1">New bill</a>
                        </div>
                    </div>
                </div>
                <div class="QA_table ">

                    <table class="table lms_table_active">
                        <thead>
                        <tr>
                            <th scope="col">Billing ID</th>
                            <th scope="col">Service</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Customer email</th>
                            <th scope="col">Customer phone</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<71; $i++)
                            <tr>
                                <th scope="row"> <a href="#" class="question_content"> invoice00{{$i+1}}</a></th>
                                <td>Website</td>
                                <td>Teacher James</td>
                                <td>teacher.james@gmail.com</td>
                                <td>+237 675 89 21 36</td>
                                <td>$25.00</td>
                                <td><a href="#" class="status_btn">Active</a></td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include("components.billing_form")
@endsection
