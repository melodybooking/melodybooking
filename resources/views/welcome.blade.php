@include('layouts.master')
           
<div class="img-responsive container">
    

    <img class="col-md-4 rounded img-thumbnail mySlides" src="\img\gradient.jpg">

    <img class="col-md-4 rounded img-thumbnail mySlides" src="\img\gradient.jpg">

    <img class="col-md-4 rounded img-thumbnail mySlides" src="\img\gradient.jpg">

    <img class="col-md-offset-2 col-md-4  img-thumbnail mySlides" src="\img\gradient.jpg">

    <img class="col-md-4  img-thumbnail mySlides" src="\img\gradient.jpg">
 
    <p class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">

        Beginning.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolore odio voluptas aspernatur nemo itaque, reprehenderit illum, doloremque, corporis eum excepturi, repudiandae quo in! Molestias hic minus eius porro perferendis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quisquam aspernatur sapiente, aliquid inventore eum dolorum animi earum obcaecati mollitia quas temporibus commodi est autem perferendis cupiditate numquam quaerat veniam.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem similique, et eligendi fugiat eaque expedita, quia optio temporibus perferendis nobis saepe fuga cupiditate sapiente? Laboriosam ut exercitationem similique. Soluta, voluptatibus?
        Ending.

    </p>

</div>

<script>

    $(document).ready(function() 
    {
        var height = $('footer').height();

        $('body').css({
            "margin-bottom": height
        });
    });

</script>

