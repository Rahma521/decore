

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('js/anime.min.js') }}" ></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>

<script> 
    $(document).ready(function ()
     {
      $(document).on("click",".addCart",function(e)
      {
        e.preventDefault();
        //console.log("hi");
        var itemId = $(this).val();
        var quantity = $("#quantity").val();
        url ="{{ route('cart.store',':itemId') }}";
        url = url.replace(':itemId',itemId);
        //alert(itemId);
        $.ajax({
          type:"post",
          url:url,
          data:
          {
            '_token':"{{csrf_token()}}",
            'itemId':itemId,
            'quantity':quantity,
          },
          success: function(response){
            $('#c2').empty().html(response.cartContentList);
            const Toast = Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Moved To Cart',
                showConfirmButton: false,
                timer: 1500
              });
           }
        });
      });
     });
</script>


<script>
  $(document).ready(function ()
   {
    $(document).on("click",".removeCart",function(e)
    {
      e.preventDefault();
       var itemId = $(this).val();
       url ="{{ route('cartRemove',':itemId') }}";
       url = url.replace(':itemId',itemId);
        $.ajax({
          type:'post',
          url : url,
          data:
          {
            '_token':"{{csrf_token()}}",
            'itemId':itemId,
          },
          success: function(response){
            var a = $('.cart-total').val();
            var c = $.parseJSON(response.cartItemTotal);
           // alert(a);
           // alert(c);
            var minus = a - c;
            $('.cart-total').text(minus);
            $('.cart-total').val(minus);
            $('.deleteDiv'+itemId).remove();
            
          }
      });
    });
  });
</script>

{{-- <script>
  $(document).ready(function ()
   {
    $(document).on("click",".clear",function(e)
    {
      e.preventDefault();
       url ="{{ route('clearCart') }}";
       alert('hi')
        $.ajax({
          type:'post',
          url : url,
          data:
          {
            '_token':"{{csrf_token()}}",
          },
      });
    });
  });
</script> --}}

{{-- <script>
  function cartIncrement(id){
    $.ajax({
        type: 'GET',
        url: "/cart-increment/"+id,
        dataType: 'json',
        success:function(response){
          $('.cart-total').text(response.cartTotal);
            
        }
    });
 }

 function cartDecrement(id){
    $.ajax({
        type: 'GET',
        url: "/cart-decrement/"+id,
        dataType: 'json',
        success:function(response){
           
        }
    });
 }
</script> --}}

<script> 
  $(document).ready(function ()
   {
    $(document).on("click",".cartIncrement",function(e)
    {
      e.preventDefault();
      //console.log("hi");
      var itemId = $(this).val();
      var quantity = $("#updateQty").val();
      //quantity ++;
      url ="{{ route('cart.updateInc',':itemId') }}";
      url = url.replace(':itemId',itemId);
      //alert(itemId);
      $.ajax({
        type:"post",
        url:url,
        data:
        {
          '_token':"{{csrf_token()}}",
          'itemId':itemId,
          'quantity':quantity,
        },
        success: function(response){
          var a = $('.cart-total').val();
          var c = $.parseJSON(response.cartincrement);
          //alert(a)
          var sum = a + c;
          $('.cart-total').text(sum);
          $('.cart-total').val(sum);
          //$('.cart-Item-Total').val(itemTotal);
          const Toast = Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: 'Cart Increment',
              showConfirmButton: false,
              timer: 1500
            });
         }
      });
    });
   });
</script>


<script> 
  $(document).ready(function ()
   {
    $(document).on("click",".cartDecrement",function(e)
    {
      e.preventDefault();
      //console.log("hi");
      var itemId = $(this).val();
      var quantity = $("#updateQty").val();
      url ="{{ route('cart.updateDec',':itemId') }}";
      url = url.replace(':itemId',itemId);
      //alert(itemId);
      $.ajax({
        type:"post",
        url:url,
        data:
        {
          '_token':"{{csrf_token()}}",
          'itemId':itemId,
          'quantity':quantity,
        },
        success: function(response){
          var a = $('.cart-total').val();
          var c = $.parseJSON(response.cartdecrement);
          //alert(a)
          var total = a - c;
          if (total <=0 )
          {
            var total = 0;
          }
          $('.cart-total').text(total);
          $('.cart-total').val(total);
          //$('.cart-total').text(response.cartTotal);
          const Toast = Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: 'Cart Decrement',
              showConfirmButton: false,
              timer: 1500
            });
         }
      });
    });
   });
</script>