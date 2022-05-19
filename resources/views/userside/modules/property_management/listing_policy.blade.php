@extends('userside.layout')
@section('main')
 @include('userside.layouts.sidebar')
 <div id="rightcolumn" style="
 width:79% " class="rightcolumn_div post_story_margin">

             <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
                     <div id="mytabs_search" style="margin-top:0px;">
                     </div>
                     <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property Management</a> &raquo; Listing Policy </span>
             </div>

             <div class="" style="padding: 10px; text-align: justify;">
                 <div style="padding:10px;margin-bottom: 20px;">
                     <h2 style="margin-bottom: 25px;">Zone Factor (Location Zones)</h2>

                     <h3>What are Zones?</h3>
                     <p>
                     Locations within cities have been classified into three zones i.e. Zone A, Zone B and Zone C based on
                     various factors such as the volume of premier leads a location receives, property transaction volume and
                     property prices in the location etc. Zone A contains the most premium locations and Zone C contains the
                     least premium locations, for example DHA Lahore is a premium location allocated to Zone A.
                     </p>


                     <h3>Agent's Zone</h3>
                     <p>
                     Every agent is allocated a Zone based on his/her location of business operations. A Zone C agent has the
                     option of posting property listings in Zone A or Zone B by paying the difference in listing price across the
                     zone, however, an agent cannot buy packages in different zones simultaneously.
                     </p>

                     <h3>Posting Across Zones</h3>
                     <p>
                     If a Zone C agent wants to consume products (Listings, Superhot or Hot Listings) in Zone A, extra credits
                     will be charged and the agent will be intimated accordingly. If a Zone A agent wishes to post listings in
                     Zone C, no extra credits will be charged. The extra charges are applicable to any package that a client
                     may purchase.
                     </p>
                 </div>

                 <div style="padding:10px;margin-bottom: 20px;">
                     <h2 style="margin-bottom: 25px;">Peak Factor</h2>

                     <p>
                     Extra Credits may be charged when posting a listing in high traffic locations. An agent will be always be
                     notified when posting in a high traffic location with a peak factor.
                     </p>

                     <p>
                     High traffic locations are areas or neighborhoods in a city which receive substantially more traffic and
                     leads when compared to other locations in the same city. High traffic locations may belong to any of the
                     three zones i.e. Zone A, Zone B and Zone C.
                     </p>

                     <p style="color:red">
                     Note: If a Zone B or Zone C agent posts a listing in a Zone A location, which is also a high traffic location,
                     both Zone Factor and Peak Factor will be applicable. Agents will be notified accordingly.
                     </p>
                 </div>

                 <div style="padding:10px;margin-bottom: 20px;">
                     <h2 style="margin-bottom: 25px;">Posting Across Cities:</h2>

                     <p>
                     Every agent can post up to 10% (percent) listings out of the total listing quota outside his/her city of business operations. Credits will be charged from the Zone Package or Add-on products purchased by the agent. To post more than 10% (percent) listings an agent will have to buy premium packages for other cities. Please contact Zameen Sales Team in this regard.
                     </p>

                     <br>
                     <p>
                         Contact Us:
                         <br>
                         Telephone: some dumy (92633)
                         <br>
                         Email: social@abadkar.com
                     </p>

                 </div>
             </div>		</div>
         </div>
     </div>
 </div>
</div>
@endsection
