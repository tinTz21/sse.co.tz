@extends('layouts.app')
 
@section('content')
    @include('components.css.front_end.general_style')
    <div class="container">
        <div class="col-md-12" style="padding-top: 2em;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="d-flex justify-content-center">
                        PRODUCT CATALOG.
                    </h3>
                </div>
                @include('components.front_pages.catalog')
            </div>
        </div>

        <div class="col-md-12 d-flex justify-content-center" style="padding: 4em;">
            <p>
                Plot No. 158, Block 14 Bunju B,<br>
                Along Bagamoyo Road,<br>
                P.O Box 61175-Dar es Salaam-Tanzania.<br>
                Email: soundstageengineering@yahoo.com<br>
                Mob: +255 712 586 984/+255 766 156 714.
            </p>
        </div>
    </div>
@endsection