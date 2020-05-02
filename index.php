

<!DOCTYPE >
<html>
    <head>
        
        <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"  />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body class="">
        <div class="banner">
            <nav class="navbar fixed-top navbar-expand-sm ">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.jpg" width="40" height="40" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto justify-content-center">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item" data-toggle="modal" data-target="#exampleModal">
                        <a class="nav-link" href="#">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conatct</a>
                      </li>
                  </ul>
                  <div class="phone my-2 my-lg-0">
                        <a class="nav-link active" href="#">+2347068888888</a>
                  </div>
                </div>
              </nav>

            <header class="banner-text" >
                <p class="main"> Omititun Raffle Draw</p>
            </header>
        </div>

        <div class="container">
            <div class="content-1" >
                Oyo State Omititun raffle draw 2020 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </div>
            <div class="row content-2">
                <div class="col">
                    <div class="inner-content">
                        <span class="badge badge-secondary">1</span>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                         Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                    </div>
                    <div class="inner-content">
                        <span class="badge badge-secondary">2</span>
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </div>
                </div>
                <div class="col">
                    <div class="inner-content">
                        <span class="badge badge-secondary">3</span>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                         Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                    </div>
                    <div class="inner-content">
                        <span class="badge badge-secondary">4</span>
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Omititun Raffle Draw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="msg">
                    </div>
                    <form>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Name:</label>
                          <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="apply">Apply</button>
                </div>
            </div>
            </div>
        </div>

        <footer>
            <div class="footer">
                <p>Contact information: <a href="mailto:">omititun@oyostate.com</a>.</p>
            </div>
        </footer>
        <script type="text/javascript" >
            $(document).ready(() => {
                $('#apply').on('click', () => {
                    getTicket()
                })
                $('#exampleModal').on('hide.bs.modal', () => {
                    $('.msg').html('')
                    $("#name").val("")
                })
            })

            function getTicket() {
                var name = $("#name").val()
                if(name == '') {
                    $('.msg').html("Name field is required")
                    return
                }
                
                var request = $.ajax({
                    url: "ticket.php",
                    method: "POST",
                    data: {
                        name
                    }
                })

                request.done(function( msg ) {
                    $('.msg').html( msg );
                    $("#name").val("")
                });
            }
        </script>
        
        <script type="text/javascript" src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>