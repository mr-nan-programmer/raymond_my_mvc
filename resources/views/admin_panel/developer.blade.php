@extends('layout.admin_panel')
@section('content')
        <br><br><br>
        <div class="row" >
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="button-ad-wrap res-mg-t-30">
                <div class="alert-title">

                    <h2>Migrations</h2>
                    <p>rollback[0] | update[0]</p>

                </div>

                <div class="button-ap-list responsive-btn"
                >
                    <form method="post" action="">
                    <div class="button-style-four btn-mg-b-10">
                        <button type="submit" class="btn btn-custon-four btn-default">
                                Show </button>
                        <button type="submit" name="update" class="btn btn-custon-four btn-primary">
                                <i class="fa fa-info-circle adminpro-informatio" aria-hidden="true"></i> Update</button>
                        <button type="submit" class="btn btn-custon-four btn-warning">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger" aria-hidden="true"></i> Rollback</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
