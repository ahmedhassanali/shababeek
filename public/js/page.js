jQuery(function(){
    //add product btn
    $('.add-cta3-btn').on('click', function (e) {

        e.preventDefault();

        var id = $(this).data('id');
        var hight = $(this).data('hight');
        var width = $(this).data('width');
        var number = $(this).data('number');


        var html=
        `<tr>
        <input type='hidden' name='products[]' value='${id}'>
        <td>${hight}</td>
        <td>${width}</td>
        <td>${number}</td>
         </tr>`;

         $('.cta3-list').append(html);


    });//end of click function



});

