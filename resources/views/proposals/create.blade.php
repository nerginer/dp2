@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Create New Proposal</h3>
                      
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    
                        <div id="example-vertical">
                          <h3>Main Info</h3>
                          <section>
                          	@include('proposals.main_info')
                          </section>
                          <h3>Sensors</h3>
                          <section>
                            @include('proposals.sensor')
                          </section>
                          <h3>Processing</h3>
                          <section>
                            @include('proposals.processing')
                          </section>
                          <h3>Communications</h3>
                          <section>
                            @include('proposals.communication')
                          </section>
                          <h3>User Interface</h3>
                          <section>
                            @include('proposals.userInterface')
                          </section>
                          <h3>Storage</h3>
                          <section>
                           @include('proposals.storage')
                          </section>
                          <h3>Voltage</h3>
                          <section>
                            @include('proposals.voltage')
                          </section>
                          <h3>Physical</h3>
                          <section>
                            @include('proposals.physical')
                          </section>
                          <h3>Review & Approve</h3>
                          <section>
                            @include('proposals.reviewandapprove')  
                           
                          </section>
                        </div>
               
                </div>
        </div>
    </div>
</div>
@endsection