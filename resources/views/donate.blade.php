@extends('layouts.default', ['title' => 'Donate'])

@section('content')
       <!-- container -->
       <div class="container">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>

           <div class="row">
               <div class="col-md-offset-5">
                   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                       <input type="hidden" name="cmd" value="_s-xclick" />
                       <input type="hidden" name="hosted_button_id" value="M2BPEFRAZF5ZN" />
                       <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                       <img alt="" border="0" src="https://www.paypal.com/en_CM/i/scr/pixel.gif" width="1" height="1" />
                   </form>
               </div>
               <!-- Article main content -->
               <article class="col-md-7 maincontent">
                   <header class="page-header">
                       <h1 class="page-title">{{__('messages.help01')}}</h1>
                   </header>
                   <p>{{__('messages.help5')}}</p>
                   <p>{{__('messages.help4')}}</p>
                   <p>{{__('messages.help6')}}</p>
                   <p>{{__('messages.help7')}}</p>

                   <p><strong>{{__('messages.help8')}}</strong></p>


               </article>
               <!-- /Article -->

               <!-- Sidebar -->
               <aside class="col-md-5 sidebar sidebar-right">


                   <div class="row widget">
                       <div class="col-xs-12">
                           <p><img src="{{asset('images/Donate.jpg')}}" alt=""></p>
                       </div>
                   </div>
                   <br>
                   <br>
                   <br>
                   <hr>
                   <hr>
                   <hr>
                   <hr>
                   <h2>{{__('messages.help0')}}</h2>
                   <div class="row widget">
                       <div class="col-xs-12">
                           <p><strong>$28</strong> {{__('messages.help1')}}</p>
                       </div>
                       <div class="col-xs-12">
                           <p><strong>$53</strong> {{__('messages.help2')}}</p>
                       </div>
                       <div class="col-xs-12">
                           <p><strong>$1000</strong> {{__('messages.help3')}}</p>
                       </div>
                   </div>

               </aside>
               <!-- /Sidebar -->

           </div>
       </div>	<!-- /container -->



@stop
