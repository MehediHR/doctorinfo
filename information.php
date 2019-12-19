<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/first-aid-kit.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/info.css">

    <title>Information</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #486C87;">
        <div class="container">
            <a class="navbar-brand" href="index.php">DoctorInfo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link active" href="information.php">Information</a>
                    </li>


                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="regi.php">Registration</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link cool-link " href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="contain">

        <section class="sece">
            <aside class="ic icon"></aside>
            <aside class="saide container">

                <!--asid design-->
                <h1 class="ml-2 mt-5">Divison</h1>
                <div class="ml-2" style="color:#5F5F5F;">
                    Barisal<br />
                    Chittagong<br />
                    Khulna<br />
                    Mymensingh<br />
                    Rajshahi<br />
                    Rangpur<br />
                </div>
                <h1 class="ml-2 mt-5">Expertise</h1>
                <div class="ml-2 mb-5" style="color:#5F5F5F;">
                    Allergy and immunology<br />
                    Adolescent medicine<br />
                    Anesthesiology<br />
                    Aerospace medicine<br />
                    Cardiology<br />
                    Cardiothoracic surgery<br />
                    Child and adolescent psychiatry<br />
                    Clinical neurophysiology<br />
                    Colorectal surgery<br />
                    Dermatology<br />
                    Developmental pediatrics<br />
                    Emergency medicine<br />
                    Endocrinology<br />
                    Family Medicine<br />
                    Forensic pathology<br />
                    Forensic psychiatry<br />
                    Gastroenterology<br />
                    General surgery<br />
                    General surgical oncology<br />
                    Geriatrics<br />
                    Geriatric psychiatry<br />
                    Gynecologic oncology<br />
                    Hematology<br />
                    Hematologic pathology<br />
                    Infectious disease<br />
                    Internal medicine<br />
                    Interventional radiology<br />
                    Intensive care medicine<br />
                    Maternal-fetal medicine<br />
                    Medical biochemistry<br />
                    Medical genetics<br />
                    Medical oncology<br />
                    Neonatology<br />
                    Nephrology<br />
                    Neurology<br />
                    Neuropathology<br />
                    Neurosurgery<br />
                    Nuclear medicine<br />
                    Obstetrics and gynecology<br />
                    Occupational medicine<br />
                    Ophthalmology<br />
                    Orthopedic surgery<br />
                    Oral and maxillofacial surgery<br />
                    Otorhinolaryngology<br />
                    Palliative care<br />
                    Pathology<br />
                    Pediatrics<br />
                    Pediatric allergy and immunology<br />
                    Pediatric cardiology<br />
                    Pediatric emergency medicine<br />
                    Pediatric endocrinology<br />
                    Pediatric gastroenterology<br />
                    Pediatric hematology and oncology<br />
                    Pediatric infectious disease<br />
                    Pediatric nephrology<br />
                    Pediatric respiratory medicine<br />
                    Pediatric rheumatology<br />
                    Pediatric surgery<br />
                    Physical medicine and rehabilitation<br />
                    Plastic, reconstructive and aesthetic surgery<br />
                    Psychiatry<br />
                    Public health<br />
                    Radiation oncology<br />
                    Radiology<br />
                    Reproductive endocrinology and infertility<br />
                    Respiratory medicine<br />
                    Rheumatology<br />
                    Sports medicine<br />
                    Thoracic surgery<br />
                    Neuroradiology<br />
                    Urology<br />
                    Vascular surger<br />
                </div>
            </aside>

            <div class="mai">

                <form class="mt-5 ml-5 container">
                    <div class="form-row">

                        <div class="input-group mb-3" style=" width: 60%;">
                            
                            <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Name" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">Search</div>
                            </div>
                        </div>
                    </div>
                </form>


                <div id="result"></div>


                <p class="mt-2" style="text-align: center; color: #E5E5E5">End Result</p>
            </div>
        </section>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easeScroll.js"></script>
    <script>
        $("html").easeScroll();
        $(document).ready(function() {
            load_data();

            function load_data(query) {
                $.ajax({
                    url: "search.php",
                    method: "post",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            $('#search_text').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });

    </script>

</body>

</html>
