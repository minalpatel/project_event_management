<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <?php
    require_once "Header.php";
    ?>
</header>
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="container">

        <h2>Frequently Asked Questions </h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                            How much does it cost to use EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                    <div class="panel-body px-3 mb-4">
                       <ul>
                            <li> EventBoard's pricing is 1.5% of the ticket price and $0.49 per paid ticket plus 1.5% payment processing per transaction for our essentials package.</li>
                            <li>EventBoard's pricing is 2.5% of the ticket price and $1.09 per paid ticket plus a 2.0% payment processing fee per transaction for our professional package.</li>
                            <li>EventBoard's premium package has custom pricing.</li>
                            <li>Review our packages here.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Can I use EventBoard for free events?
                        </a>
                    </h3>
                </div>
                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body px-3 mb-4">
                        <p> It's free for organizers to use EventBoard if you're not charging for tickets! There are no monthly charges, enrollment costs, or setup fees. If you're charging for ticket sales, our fees vary by package.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            How do I sell tickets on EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li>You can accept cash or credit card payments for your event with EventBoard Organizer. It's a great way to keep track of on-site sales, and you can even collect contact information for your attendees.</li>
                            <li>Review our payment processing options here.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            How do I get money from EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li>To make sure you get paid for your ticket sales, it's crucial to enter your payout details. You can be paid by direct deposit, check (USD only), PayPal, or Authorize.Net. When using EventBoard Payment Processing to collect payments, your payout will start processing 4-5 days after the event ends.</li>
                            <li> See your payout status here.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                            How do I get a refund on EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li>EventBoard organizers set their own refund policies. Before requesting a refund, first check the event listing to see if the event organizer set a refund policy.</li>
                            <li> Review our refund policy here.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading5">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                            Can I cancel my free tickets on EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li>We appreciate attendees taking the time to update their order, and if you can't attend, it's easy to cancel your registration from your EventBoard account. Just log in to EventBoard, Go to the Tickets page, and locate your order. Click your order to view order details,
                                and then select "Cancel Order" to cancel your registration. We'll send you and the event organizer an email confirming the cancellation.</li>
                            <li> Learn more about canceling your free registration here.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading6">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                            What is the privacy policy of EventBoard?
                        </a>
                    </h3>
                </div>
                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li> Please refer to our privacy policy page to check more information.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading7">
                    <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                            I have multiple events. Is there any promotional offer?
                        </a>
                    </h3>
                </div>
                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                    <div class="panel-body px-3 mb-4">
                        <ul>
                            <li>Yes! If you would like to use our services for multiple events throughout the year or in the future, we can offer you a multi-event package deal. In order to secure this promotion, event organizers will have to commit their events all at the same time.
                                We can provide an accurate price quote that is unique to your events’ organization.</li>
                            <li> Please contact us for more details.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<footer>
    <?php
    require_once "Footer.php";
    ?>
</footer>
</body>
</html>


