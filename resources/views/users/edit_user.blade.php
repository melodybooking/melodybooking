@extends('layouts.master')

@section('content')

<div id="userEditContainer" class="container-fluid">

    <section id="login">

        <div class="row">

            <h1 class="section-title text-center">Edit User Account</h1>

            <div class="col-md-6 col-md-offset-3">

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

                <form class ="form-group" method="POST" action="{{ action('UserController@update', [ Auth::id() ]) }}" data-validation required-message="This field is required">

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

                    <input class ="btn btn-primary" type="submit" value="update information">

                    {{ method_field('PUT') }}

                </form>

                <form action="{{ action('UserController@password', \Auth::id() ) }}" method="GET">

                    {!!csrf_field()!!}
            
                    <input type="submit" class="btn btn-primary" value="Edit User Password" style="margin-top: 5px; margin-bottom: 5%;">

                </form>

                <form  class="form-group" action="{{ action('UserController@destroy', [Auth::id()]  ) }}" method="POST">
                    
                    {{ csrf_field() }}

                    <input class = "btn btn-danger" type="submit" value="delete information">

                    {{ method_field('DELETE') }}

                </form>

                </form>

            </div>

        </div>

    </section>

</div>
    
@stop