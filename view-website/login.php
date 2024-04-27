<?php require 'header.php'; ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            Code Sphere
            <img src="../images/logo/logo-white.png" alt="" width="30px">
        </a>

        <a href="register.php" class="btn custom-btn d-lg-block d-none">Register</a>
</nav>

<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Sign In here</h2>

                    <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control"
                        placeholder="Username" required>

                    <div class="text-end mb-2"><input type="checkbox" name="" id=""><small> Show Password</small>
                        <input type="password" class="form-control" name="ticket-form-phone" placeholder="Password"
                            required>
                    </div>

                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                        <button type="submit" class="form-control">Sign In</button>
                    </div>

                    <br>

                    <div class="text-center mb-3">
                        Don't have an account? <a href="register.php">Register</a>
                    </div>

                    <!-- <div class="ticket-form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="ticket-form-name" id="ticket-form-name"
                                            class="form-control" placeholder="Username" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="ticket-form-email" id="ticket-form-email"
                                            pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                            required>
                                    </div>
                                </div> -->

                    <!-- <h6>Choose Ticket Type</h6>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Eary bird $120
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Standard $240
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="number" name="ticket-form-number" id="ticket-form-number"
                                    class="form-control" placeholder="Number of Tickets" required>

                                <textarea name="ticket-form-message" rows="3" class="form-control"
                                    id="ticket-form-message" placeholder="Additional Request"></textarea> -->

                </form>
            </div>

        </div>
    </div>
</section>
</main>

<?php require 'footer.php'; ?>