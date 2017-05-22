@extends('layouts.master')

@section('content')

<div style="margin-top:150px;" id="userEditContainer" class="container text-left">

    <section id="login">

        <div class="row">

            <h1 class=" section-title container ">Edit User Account</h1>

            <div class="container">

                <p>Please fill out the information below so we can update your account.</p>

                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>

                    <div class="alert alert-danger">

                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>

                    </div>

                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>

                <?php endif; ?>

                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>

                    <div class="alert alert-success">

                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>

                    </div>

                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>

                <?php endif; ?>

                <form class ="form-group col-xs-7 col-sm-7 col-md-7 col-lg-7" method="POST" action="{{ action('UserController@update', [ Auth::id() ]) }}" data-validation required-message="This field is required">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label>Full Name</label>

                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= Auth::user()->name; ?>" required>

                    </div>

                    <div class="form-group">

                        <label>Email</label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= Auth::user()->email; ?>" required>

                    </div>

                    <input type="hidden" name="id" value="{{ Auth::id() }}">

                    <input class ="btn btn-primary" type="submit" value="Update Information">

                    {{ method_field('PUT') }}

                </form>

                <form class="col-xs-12 col-sm-12 col-md-12 col-lg-12" action="{{ action('UserController@password', [ Auth::id() ] ) }}" method="GET">

                    {!!csrf_field()!!}
            
                    <input type="submit" class="btn btn-success" value="Edit Password" style="margin-top: 5px; margin-bottom: 15px;">

                </form>

                <form class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12" action="{{ action('UserController@destroy', [Auth::id()]  ) }}" method="POST">

                    {{ csrf_field() }}

                    <input class = "btn btn-danger" type="submit" style="margin-top: 5px; margin-bottom: 25px;" value="Delete Information">

                    {{ method_field('DELETE') }}

                </form>

                </form>

            </div>

        </div>

    </section>

</div>

@stop
