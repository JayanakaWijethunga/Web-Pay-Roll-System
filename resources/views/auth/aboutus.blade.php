@extends('layouts.welcome')

@section('headers')

    <li class="">
        <a href="{{route('myhome')}}" class="">Home</a>
    </li>
    <li class="">
        <a href="{{route('login')}}" class="">Login</a>
    </li>
    <li class="">
        <a href="{{route('aboutus')}}" class="active">About Us</a>
    </li>
    <li class="">
        <a href="{{route('contactus')}}" class="">Contact</a>
    </li>


@endsection



@section('body_part')

<div class="wrapper row2">
        <div id="container" class="clear">
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
          <div id="about-us" class="clear">
            <!-- ####################################################################################################### -->
            <!-- ####################################################################################################### -->
            <div id="team">
              <ul class="clear">
                <li class="one_half first">
                  <div id="about-intro" class="clear">
                    <img src="images/demo/470x250.gif" alt="">
                    <h2>Vivamuslibero Auguer</h2>
                    <p>In sed neque id libero pretium luctus. Vivamus faucibus. Ut vitae elit. In hac habitasse platea dictumst. Proin et nisl ac orci tempus luctus. Aenean lacinia justo at nisi.</p>
                  </div>
                </li>
                <li class="one_quarter">
                  <figure><img src="images/demo/team-member.gif" alt="">
                    <figcaption>
                      <p class="team_name">Name Goes Here</p>
                      <p class="team_title">Job Title Here</p>
                    </figcaption>
                  </figure>
                  <ul>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                  </ul>
                </li>
                <li class="one_quarter">
                  <figure><img src="images/demo/team-member.gif" alt="">
                    <figcaption>
                      <p class="team_name">Name Goes Here</p>
                      <p class="team_title">Job Title Here</p>
                    </figcaption>
                  </figure>
                  <ul>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                  </ul>
                </li>
                <li class="one_quarter first">
                  <figure><img src="images/demo/team-member.gif" alt="">
                    <figcaption>
                      <p class="team_name">Name Goes Here</p>
                      <p class="team_title">Job Title Here</p>
                    </figcaption>
                  </figure>
                  <ul>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                  </ul>
                </li>
                <li class="one_quarter">
                  <figure><img src="images/demo/team-member.gif" alt="">
                    <figcaption>
                      <p class="team_name">Name Goes Here</p>
                      <p class="team_title">Job Title Here</p>
                    </figcaption>
                  </figure>
                  <ul>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/social-icon.png" alt=""></a></li>
                  </ul>
                </li>
                <li class="one_half">
                  <div id="skillset">
                    <h2>Vivamuslibero Auguer</h2>
                    <p>In sed neque id libero pretium luctus. Vivamus faucibus. Ut vitae elit. In hac habitasse platea dictumst. Proin et nisl ac orci tempus luctus. Aenean lacinia justo at nisi.</p>
                    <ul>
                      <li class="size_50"><strong>Text Here - 50%</strong></li>
                      <li class="size_60"><strong>Text Here - 60%</strong></li>
                      <li class="size_70"><strong>Text Here - 70%</strong></li>
                      <li class="size_80"><strong>Text Here - 80%</strong></li>
                      <li class="size_90"><strong>Text Here - 90%</strong></li>
                      <li class="size_100"><strong>Text Here - 100%</strong></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <!-- ####################################################################################################### -->
          </div>
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
          <!-- ####################################################################################################### -->
        </div>
      </div>

@endsection