@extends('Layouts.UserDashboard-Interface')
@section('content')
              
<div class="chat-application mt-2">
  <div class="content-overlay"></div>
 
  <div class="chat-name p-2 bg-white" style="margin-left: 0px !important;">
    <div class="media">
        <span class="chat-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-none d-block d-sm-block d-md-none"></span>
        <div class="media-body">
          <span class="float-left">
            Technical Chat (Support)
          </span>
        </div>
    </div>
  </div>
  <section class="chat-app-window" style="margin-left: 0px !important;">
    <div class="badge badge-dark mb-1">Chat History</div>
    <div class="chats">
      <div class="chats">
        <div class="chat">
          
          <div class="chat-body">
            <div class="chat-content">
              <p>How can we help? We're here for you!</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
           
          <div class="chat-body">
            <div class="chat-content">
              <p>Hey John,  I am looking for the best admin template.</p>
            </div>
            <div class="chat-content">
              <p>Could you please help me to find it out?</p>
            </div>
            <div class="chat-content">
              <p>It should be Bootstrap 4 compatible.</p>
            </div>
          </div>
        </div>
        <p class="time">1 hours ago</p>
        <div class="chat">
           
          <div class="chat-body">
            <div class="chat-content">
              <p>Absolutely!</p>
            </div>
            <div class="chat-content">
              <p>Convex admin is the responsive bootstrap 4 admin template.</p>
            </div>
          </div>
        </div>
        <p class="time">30 minutes ago</p>
        <div class="chat chat-left">
           
          <div class="chat-body">
            <div class="chat-content">
              <p>Can you provide me audio link?</p>
            </div>
          </div>
        </div>
        <p class="time">20 minutes ago</p>
        <div class="chat">
           
          <div class="chat-body">
            <div class="chat-content">
              <p>Audio</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
           
          <div class="chat-body">
            <div class="chat-content">
              <p>Can you provide me video link?</p>
            </div>
          </div>
        </div>
        <p class="time">10 minutes ago</p>
        <div class="chat">
          
          <div class="chat-body">
            <div class="chat-content">
              <p>Video</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          
          <div class="chat-body">
            <div class="chat-content">
              <p>Looks clean and fresh UI.</p>
            </div>
            <div class="chat-content">
              <p>It is perfect for my next project.</p>
            </div>
            <div class="chat-content">
              <p>How can I purchase it?</p>
            </div>
          </div>
        </div>
        <p class="time">just now</p>
        <div class="chat">
          
          <div class="chat-body">
            <div class="chat-content">
              <p>Thanks, from ThemeForest.</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          
          <div class="chat-body">
            <div class="chat-content">
              <p>I will purchase it for sure.</p>
            </div>
            <div class="chat-content">
              <p>Thanks.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="chat-app-form bg-blue-grey bg-lighten-5" style="margin-left: 0px !important;">
    <form class="chat-app-input row">
      <fieldset class="form-group position-relative has-icon-left col-lg-10 col-8 m-0">
        
        <input type="text" class="form-control" id="iconLeft4" placeholder="Type your message"
         style="padding-left: 10px;" >
      </fieldset>
      <fieldset class="form-group position-relative has-icon-left col-lg-2 col-4 m-0">
        <button type="button" class="btn btn-info">
          <i class="fa fa-paper-plane-o hidden-lg-up"></i> Send</button>
      </fieldset>
    </form>
  </section>
</div>

@endsection