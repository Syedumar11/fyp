<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span id="#test">click</span>
    <h1 id='asd'>asdfkasdlfkj</h1>

    <form action="add_to_cart.php" method="post">
        <button>dddddd</button>
    </form>


    <button id="test">testddd</button>
    <button data-name="usman" class="dd">test</button>
    <button data-name="ahmad" class="dd">test</button>
    <button data-name="ccccc" class="dd">test</button>
    <script src="assets/js/jquery.js"></script>

    <script>
        // $('#asd').html("aaasdafasdxzxcvzcx");

        //document.getElementById('asd').innerHTML = "hello world";
        let a = [334, 'ssdf', ['ccc'], 4444];

        let b = {
            email: 'test@gmail.com',
            hh: 333,
            cc: [444, 'oo'],
            io: {
                ff: 333
            }
        };


        $('#dd').click(function() {
            $(this).css('color', 'red');
            // $('h1').html('hello world');

            $('h1').prepend(' hello world ');
            // document.getElementById('asd').innerHTML = "hello world";
        });


        function abc(f) {
            console.log(f['p']['e']);
        }

        abc({
            p: {
                e: 'helmnjhkjnkjno world',
                h: 'some text'
            },
            k: 123,
        })


        $("#test").click(function() {

            $.get('add_to_cart.php', function(z) {

                console.log(z);
                let data = JSON.parse(z);

                console.log(data);
            });
        });

        $('.dd').click(function() {

            console.log($(this).data('name'));
        });
    </script>
</body>

</html>