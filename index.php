<?php require 'layouts/header.php'?>
<div class="container" style="padding: 100px">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Join Our First Event in Hotel Crowne plaza,Dubie</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control input-sm floatlabel" placeholder="full Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <select  name="country_id" id="country_id" class="form-control input-sm floatlabel">
                                        <option value="">+912</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select  name="travel_way_id" id="travel_way_id" class="form-control input-sm floatlabel">
                                        <option value="">+912</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select  name="traveler_type_id" id="traveler_type_id" class="form-control input-sm floatlabel">
                                        <option value="">+912</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select  name="country_number" id="country_number" class="form-control input-sm floatlabel">
                                        <option value="">+912</option>
                                    </select>
                            </div>
                        </div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select  name="age_group_id" id="age_group_id" class="form-control input-sm floatlabel">
                                        <option value="">+912</option>
                                    </select>
                                </div>
                            </div>
                        </div>







                        <button onclick="addRecord()" type="button"  class="btn btn-info btn-block"> RESRVE MY SPOT</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'layouts/footer.php'?>