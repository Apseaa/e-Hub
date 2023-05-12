<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="css/button.css" rel="stylesheet">

    <title>eHub</title>
</head>

<body>
    <nav class="border-bottom" style="background-color:rgb(100, 152, 229 ); margin-bottom: 3%; padding-top: 1%;">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="home"
                        class="nav-link link-dark px-2 active fa-brands fa-hubspot fa-2xl px-2 p-2 text-white"
                        aria-current="page">eHub</a></li>
                <li class="nav-item"><a href="home" class="nav-link link-dark px-2 p-1 text-white">Home</a></li>
                {{-- <li class="nav-item"><a href="community" class="nav-link link-dark px-2 p-1 text-white">Content Hive</a>
                </li> --}}
                <li class="nav-item"><a href="about" class="nav-link link-dark px-2 p-1 text-white">About</a></li>
            </ul>
        </div>
    </nav>
    @yield('admin')
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/super-build/ckeditor.js"></script>
    <script src="js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <!-- Start of ChatBot (www.chatbot.com) code -->
    <script type="text/javascript">

        window.__be = window.__be || {};
        window.__be.id = "643cb35e2587fe0007a8e611";
        (function() {
            var be = document.createElement('script');
            be.type = 'text/javascript';
            be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(be, s);
        })

            // Tagify the element for tags
            var input = document.querySelector('input[name="tags"]'),


        // init Tagify script on the above inputs

        tagify = new Tagify(input, {

            whitelist: ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET",
                "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript",
                "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58",
                "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL",
                "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ",
                "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt",
                "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B",
                "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand",
                "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang",
                "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ - ISO/IEC 14882",
                "C# - ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce",
                "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm",
                "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)",
                "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU",
                "CMS-2", "COBOL - ISO/IEC 1989", "CobolScript - COBOL Scripting language", "Cobra", "CODE",
                "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT",
                "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS",
                "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq",
                "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP",
                "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4",
                "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make",
                "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary",
                "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB",
                "Maxima (see also Macsyma)", "Max (Max Msp - Graphical Programming Environment)", "Maya (MEL)",
                "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS",
                "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204",
                "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD",
                "Mathcad", "MSIL - deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"
            ],
            maxTags: 10,
            dropdown: {
                maxItems: 20, // <- mixumum allowed rendered suggestions
                classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0, // <- show suggestions on focus
                closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
            }
        })

        // SQL Query

    </script>
    <!-- End of ChatBot code -->
</body>

</html>
