<html>
    <head>
        <style>
            p {
                word-break: break-all;
                white-space: normal;
            }
            #titlediv{
                background-color:#871c11;
                color:white;
                padding: 2%;
                text-align: center;
            }
            .info{
                color:blue;
                font-style: oblique;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-md-8" id="titlediv">
                <h3>
                    PHOTO SUBMISSION
                </h3>
            </div>            
            <p>Dear {{$name}},</p>
            <p> We would like to inform you that we received your photo submission for {{$themeCAT}} with below information.</p>
            <p class="info">File Name: {{$orgfileName}}</p>
            <p class="info">Submission Time: {{$submitTime}}</p>
            <p>Now yours photo is submitted for evaluation. Good Luck!</p>
            <p>You will be contacted if we need any others information or any issue.</p>
            <p>If you have any questions, please contact to CPM-support team – we’re always happy to help out.</p>
            <br>
            <p>
                Cheers,<br>
                CPM Team
            </p>
        </div>        
    </body>
</html>


