$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        address: $("#address").val(),
        phonenumber: $("#phonenumber").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "asg11.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });

        })
        .fail(function (data) {
        $("form").html(
            '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
        );
        });
  
      event.preventDefault();
  
        if (!data.success) {
          if (data.errors.name) {
            $("#name-group").addClass("has-error");
            $("#name-group").append(
              '<div class="help-block">' + data.errors.name + "</div>"
            );
          }
  
          if (data.errors.address) {
            $("#address-group").addClass("has-error");
            $("#address-group").append(
              '<div class="help-block">' + data.errors.address + "</div>"
            );
          }
  
          if (data.errors.phonenumber) {
            $("#phonenumber-group").addClass("has-error");
            $("#phonenumber-group").append(
              '<div class="help-block">' + data.errors.phonenumber + "</div>"
            );
          }
        } else {
          $("form").html(
            '<div class="alert alert-success">' + data.message + "</div>"
          );
        }

      });
  
      event.preventDefault();

        $("form").submit(function (event) {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();

        });
  
  