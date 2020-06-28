@extends('layouts.main')

@section('content')
<div id="home-container" class="container-fluid p-0 my-0">
    <section id="one">

        <div class="row">
           <div class="col-md-6">
              <strong>Build an online business—no matter what business you’re in</strong>
  
              <form>
                 <div class="form-group">
                 <div class="row">
  
                       <div class="col-md-7">
                          <input type="email" class="form-control" name="email" id="email-main" aria-describedby="emailHelpId" placeholder="Enter your email address">
  
                       </div>
                       <div class="col-md-5">
                          <button id="btn-next"type="button" class="btn btn-primary notransition" v-on:click="openForm">Start free trial</button>
                       </div>
                 </div>
  
                 <div class="row">
                    <div class="col-md-12">
                       <small id="small-note">Try Shopify free for 14 days, no credit card required. By entering your email, you agree to receive marketing emails from Shopify.</small>
                    </div>
                 </div>
                 </div>
              </form>
  
           </div>   
  
           <div class="col-md-6">
              <img id="woman-write" src= "https://freedesignfile.com/upload/2017/12/Thinking-woman-writing-record-Stock-Photo.jpg" alt="">
              
           </div>  
  
  
        </div>
     </section>
  
     <section id="two">
  
        <div class="row">
           <div class="col-md-12">
              <h2><strong>Bring your business online</strong></h2>
           </div>
        </div>
  
        <div class="row">
           <div class="col-md-8">
              Create an ecommerce website backed by powerful tools that help you find customers, drive sales, and manage your day-to-day.
           </div>
  
           <div class="col-md-4 text-right">
                 <a id="explore" href="#">Explore more example</a>               
           </div>
        </div>

        <div class="row" style="margin: 40px">
            <div class="col-md-3">
               <img src ="https://cdn.shopify.com/shopifycloud/brochure/assets/merchants/alfred/home-example-small-4bc93b93a9d345329480ea6e387cf6890323170a70473bad69a87424cad52e28.jpg" alt="">
               <p id="website">FOOD & DRINK</p>
            </div>

            <div class="col-md-3">
               <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/merchants/corey-moranis/home-example-small-6cf57deaaf9e7c38f45de3d300080353843430c1be3ab0ed3cd5e21b93157de8.jpg" alt="">   
               <p id="website">JEWELRY</p>
            </div>

            <div class="col-md-3">
               <img src ="https://cdn.shopify.com/shopifycloud/brochure/assets/merchants/detour-coffee/home-example-small-10f5c2735cb72e18af4d47a31a72326b3eb1f0611963d69d12a51ed31bed4acd.jpg" alt="">
               <p id="website">FOOD & DRINK</p>
            </div>

            <div class="col-md-3">
               <img src ="https://cdn.shopify.com/shopifycloud/brochure/assets/merchants/miss-boon/home-example-small-8bb452f93af6069b33cdc00d9fab7cacaa32d34684bda58e13eb25faadeb2b72.jpg" alt="">
               <p id="website">HOME & GARDEN</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
               <h2>Take the best path forward</h2>
            </div>
        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-md-3">
               <i id="icon-2" class="fas fa-pump-soap fa-3x"></i>
               <h5>Start an online business</h5>
               <p>Create a business, whether you’ve got a fresh idea or are looking for a new way to make money.</p>
            </div>
            <div class="col-md-3">
               <i id="icon-2" class="fas fa-pump-soap fa-3x"></i>
               <h5>Move your business online</h5>
               <p>Turn your retail store into an online store and keep serving customers without missing a beat.</p>
            </div>
            <div class="col-md-3">
               <i id="icon-2" class="fas fa-pump-soap fa-3x"></i>
               <h5>Switch to Shopify</h5>
               <p>Bring your business to Shopify, no matter which ecommerce platform you’re currently using.</p>
            </div>
            <div class="col-md-3">
               <i id="icon-2" class="fas fa-pump-soap fa-3x"></i>
               <h5>Hire a Shopify expert</h5>
               <p>Get setup with the help of a trusted freelancer or agency from the Shopify Experts Marketplace.</p>
            </div>
        </div>
  
  
     </section>
  
     <section id="three">
         <div class="container">
            <div class="row">

            </div>
         </div>
     </section>
  
     <section id="four">
  
        <div class="container">
  
           <div class="row">
              <div class="col-md-12 text-center py-3">
                 <h2>Start your business journey with Shopify</h2>            
              </div>
           </div>
  
           <div class="row">
              <div class="col-md-12 text-center py-3">
                 Try Shopify for free, and explore all the tools and services you need to start, run, and grow your business.         
              </div>
           </div>
  
           <div class="row">
              <div class="col-md-12  text-center py-3">
                 <button id="btn-start" type="button" class="btn btn-primary notransition" v-on:click="openForm">Start free trial</button>           
              </div>
           </div>
  
           <div class="row">
              <div class="col-md-12  text-right py-3">
                <back-to-top text="Back to top"><button type="button" class="btn btn-dafault" id="btn-top">Back to Top</button></back-to-top>                    
              </div>
           </div>
  
        </div>
  
     </section>
</div>
@endsection