@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="single_element">
                <div class="quick_activity">
                    <div class="row">
                        <div class="col-12">
                            <div class="quick_activity_wrap">
                                <div class="single_quick_activity">
                                    <h4>Total Income</h4>
                                    <h3>$ <span class="counter">5,79,000</span> </h3>
                                    <p>Saved 25%</p>
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Total Expences</h4>
                                    <h3>$ <span class="counter">79,000</span> </h3>
                                    <p>Saved 25%</p>
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Cash on Hand</h4>
                                    <h3>$ <span class="counter">92,000</span> </h3>
                                    <p>Saved 25%</p>
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Net Profit Margin</h4>
                                    <h3>$ <span class="counter">1,79,000</span> </h3>
                                    <p>Saved 65%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="white_box box_border min_400">
                <div class="box_header  box_header_block">
                    <div class="main-title">
                        <h3 class="mb-0">EBIT (Earnings Before Interest & Tax)</h3>
                    </div>
                    <div class="title_info">
                        <p>1 Jan 2020 to 31 Dec 2020</p>
                    </div>
                </div>
                <div id="area_active"></div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 ">
            <div class="white_box box_border mb_30 min_430">
                <div class="box_header  box_header_block">
                    <div class="main-title">
                        <h3 class="mb-0">% of Income Budget</h3>
                    </div>
                </div>
                <div id="radial_2"></div>
                <div class="radial_footer">
                    <div class="radial_footer_inner d-flex justify-content-between">
                        <div class="left_footer">
                            <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                            <p>-$18,570</p>
                        </div>
                        <div class="left_footer">
                            <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                            <p>$31,430</p>
                        </div>
                    </div>
                    <div class="radial_bottom">
                        <p><a href="index_2.html#">View Full Report</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
