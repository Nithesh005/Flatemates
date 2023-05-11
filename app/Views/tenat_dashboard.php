<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font aswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/filechoose.css?version=<?php echo rand(); ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<style>
    ::-webkit-scrollbar {
        width: 0px;
        /* Width of the scrollbar */
    }

    body {
        overflow-x: hidden;
    }

    .search-box {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .search-box input[type="text"] {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-size: 16px;
        width: 200px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-box button[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 50px;
        background-color: #007bff;
    }

    .tenant_card {
        display: flex;
        flex-wrap: wrap;
        gap: 80px;
        /* justify-content: space-evenly; */
        /* background-color: red; */
    }

    .button2 {
        margin-left: 76%;
        margin-top: -4.3%;

    }

    .btn-success {
        width: 50%;
    }

    .btn-info {
        width: 50%;
    }

    .social_btn {
        display: flex;
        gap: 20px;
    }

    .add_house_row {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }


    .row>* {
        margin-left: 8%;
    }
</style>

<body onload="getcardtenant()">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Requests</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Not Yet
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <h1>user id<?php //echo session('u_id'); 
                    ?></h1> -->

    <?php require_once "after_login_header.php"; ?>



    <div class="container d-flex justify-content-end add_house_row">
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Requests</button> -->
        <div class="input-group">
            <div id="search-autocomplete" class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                My House</button>
        </div>

    </div>




    <div class="row" id="ads">
        <!-- Category Card -->
        <div class="tenant_card">
        </div>

    </div>


    <?php require_once "footer.php"; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
    // card design
    function getcardtenant() {
        $.ajax({
            // url: "<?php echo base_url() ?>/public/index.php/Controllers/dbcontrollers/reg_user_data",
            url: "<?php echo base_url('public/index.php/Dbcontrollers/tenant_card_controller'); ?>",
            method: "POST",
            dataType: "json",
            success: function(res) {
                console.log(res);
                console.log("ajax woking");
                $('.tenant_card').empty();
                res.forEach(
                    function(items) {
                        var element = $();
                        element = element.add(
                            '<div class="card col-3 card_index">' +
                            '<div class="card-image">' +
                            // '<span class="card-notify-badge">Low KMS</span>' +
                            // '<span class="card-notify-year">2018</span>' +
                            // items.u_id+items.image+
                            '<img class="img-fluid" ' +
                            'src="<?php echo base_url() ?>/public/public/uploads/' + items.u_id + '/' + items.image + '" ' +
                            'alt="Alternate Text" height="100px" width="400px"  />' +
                            '</div>' +
                            '<div class="card-image-overlay m-auto">' +
                            '<span class="card-detail-badge">' + '₹' + items.rent + '</span>' +
                            '<span class="card-detail-badge">' + items.BHK + '/' + 'BHK' + '</span>' +
                            '</div>' +
                            '<div class="col-12">' +
                            '<div class="card-body">' +
                            '<h5 class="card-title">About Home</h5>' +
                            '<p class="card-text">' + items.description + '</p>' +
                            '<p class="card-text">' + 'City' + ':' + items.city + '</p>' +
                            '<p class="card-text">' + 'Zipcode' + ':' + items.zipcode + '</p>' +
                            '<br>' +
                            '<div class="social_btn">' +
                            '<button type="button" class="btn btn-info button4">Apply</button>' +
                            '<button type="button" class="btn btn-success button3">Chat</button>' +
                            '</div>' +
                            // '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>'+
                            '</div>' +
                            '</div>' + '</div>'

                        );
                        $('.tenant_card').append(element);

                    }
                );
            },
            error: function(er) {
                // console.error(er);
                console.log("error")
            }
        })

    }
</script>
<link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.9.0/css/mdb.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.9.0/js/mdb.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

<!-- <script>
    const basicAutocomplete = document.querySelector('#search-autocomplete');
    const data = ['One', 'Two', 'Three', 'Four', 'Five'];
    const dataFilter = (value) => {
        return data.filter((item) => {
            return item.toLowerCase().startsWith(value.toLowerCase());
        });
    };

    new mdb.Autocomplete(basicAutocomplete, {
        filter: dataFilter
    });
</script> -->

</html>