@extends('layouts.admin')

@section('content')

<div class="content-area">
            <div class="mr-breadcrumb">
              <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Social Links</h4>
                    <ul class="links">
                      <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard </a>
                      </li>
                      <li>
                        <a href="javascript:;">General Settings</a>
                      </li>
                      <li>
                        <a href="{{ route('admin-social-index') }}">Social Links</a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="social-links-area">
            <div class="gocover" style="background: url({{ asset('assets/images/spinner.gif') }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
              <form id="geniusform" class="form-horizontal" action="{{ route('admin-gs-update') }}" method="POST">
              {{ csrf_field() }}

              @include('includes.admin.form-both')

                <div class="row">
                  <label class="control-label col-sm-3" for="facebook">Facebook</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="facebook" id="facebook" placeholder="http://facebook.com/" type="text" value="{{$gs->facebook}}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="f_status" value="1" {{$gs->f_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                @php
                  // dd($gs);
                @endphp
                <div class="row">
                  <label class="control-label col-sm-3" for="gplus">Google Plus</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="gplus" id="gplus" placeholder="http://google.com/" type="text" value="{{$gs->gplus}}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="g_status" value="1" {{$gs->g_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <label class="control-label col-sm-3" for="twitter">Twitter</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="twitter" id="twitter" placeholder="http://twitter.com/" type="text" value="{{$gs->twitter}}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="t_status" value="1" {{$gs->t_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <label class="control-label col-sm-3" for="instagram">Instagram</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="instagram" id="instagram" placeholder="http://instagram.com/" type="text" value="{{ $gs->instagram }}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="i_status" value="1" {{$gs->i_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <label class="control-label col-sm-3" for="linkedin">Linkedin</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="linkedin" id="linkedin" placeholder="http://linkedin.com/" type="text" value="{{$gs->linkedin}}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="l_status" value="1" {{$gs->l_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>


                <div class="row">
                  <label class="control-label col-sm-3" for="dribble">Dribble</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="dribble" id="dribble" placeholder="https://dribbble.com/" type="text" value="{{$gs->dribble}}">
                  </div>
                  <div class="col-sm-3">
                    <label class="switch">
                      <input type="checkbox" name="d_status" value="1" {{$gs->d_status==1?"checked":""}}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" class="submit-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

@endsection
