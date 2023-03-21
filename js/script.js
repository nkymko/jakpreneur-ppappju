// var filter = document.getElementById('filter');
// var container = document.getElementById('container');

// var xhr = new XMLHttpRequest();
// // xhr(document).ready(function(){
//     filter.addEventListener('change', function() {

//     // ajax
    

//     // cek kesiapan

//     xhr.onreadystatechange = function() {
//         if( xhr.readyState == 4 && xhr.status == 200){
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // execution
//     xhr.open('GET', '../home/filter?request=' + filter.value, true);
//     xhr.send();

    // var value = filter.value;
    // alert(filter.value);

//     xhr.ajax({
//         url:"../home/filter",
//         type:"POST",
//         data:'request=' + filter.value,
//         beforeSend:function(){
//             xhr(".container").html("<span>Working...</span>");
//         },
//         success:function(data){
//             xhr(".container").html(data);
//         }
//     });
//   });
// });

// $(document).ready(function(){
//     $("#filter").on('change', function(){
//         var value = $(this).val();
//         // alert(value);

//         $.ajax({
//             url:"../home/filter",
//             type:"POST",
//             data: {'request=': value },
//             beforeSuccess:function(){
//                 $(".container").html("<span>Working...</span>");
//             },
//             success:function(response){
//                 $(".container").html(response);
//             }
//         })
//     });
// });

$(document).ready(function(){
    $("#filter").on('change', function(){
        var value = $(this).val();
        // alert(value);

        $.ajax({
            url:"filter",
            type:"POST",
            data: {request: value},
            beforeSuccess:function(){
                $(".container").html("<span>Working...</span>");
            },
            success:function(data){
                $(".container").html(data);
            }
        })
    });
  });