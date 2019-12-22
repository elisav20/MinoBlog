$(".toolbar a").click(function(e) {
  var command = $(this).data("command");
  if (command == "h1" || command == "h2" || command == "p") {
    document.execCommand("formatBlock", false, command);
  }
  if (command == "createlink") {
    url = prompt("Enter the link here: ", "http://");
    document.execCommand($(this).data("command"), false, url);
  } else document.execCommand($(this).data("command"), false, null);
});

$("#reg_user").click(function() {
  var reg_firstName = $("#signup-firstname").val();
  var reg_lastName = $("#signup-lastname").val();
  var reg_userName = $("#signup-username").val();
  var reg_email = $("#signup-email").val();
  var reg_pass = $("#signup-pass").val();

  $.ajax({
    url: "ajax/authorization/signup.php",
    type: "POST",
    cache: false,
    data: {
      "signup-firstname": reg_firstName,
      "signup-lastname": reg_lastName,
      "signup-username": reg_userName,
      "signup-email": reg_email,
      "signup-pass": reg_pass
    },
    dataType: "html",
    success: function(data) {
      if (data == "SUCCESS") {
        $("#reg_user").text("Success");
        $("#reg_error").hide();
        $("#reg_success").show();
        $("#signup-firstname").val("");
        $("#signup-lastname").val("");
        $("#signup-username").val("");
        $("#signup-email").val("");
        $("#signup-pass").val("");
      } else {
        $("#reg_error").show();
        $("#reg_error").text(data);
      }
    }
  });
});

$("#log_user").click(function() {
  var log_userName = $("#login-username").val();
  var log_pass = $("#login-pass").val();

  $.ajax({
    url: "ajax/authorization/signin.php",
    type: "POST",
    cache: false,
    data: {
      "login-username": log_userName,
      "login-pass": log_pass
    },
    dataType: "html",
    success: function(data) {
      if (data == "SUCCESS") {
        $("#log_user").text("Success");
        $("#log_error").hide();
        document.location.reload(true);
      } else {
        $("#log_error").show();
        $("#log_error").text(data);
      }
    }
  });
});

$("#exit_btn").click(function() {
  $.ajax({
    url: "ajax/authorization/exit.php",
    type: "POST",
    cache: false,
    data: {},
    dataType: "html",
    success: function(data) {
      document.location.reload(true);
    }
  });
});

var textval = $("#editor").html();
$("#post_text").val(textval);

$("#editor")
  .keyup(function() {
    var value = $(this).html();
    $("#post_text").val(value);
  })
  .keyup();

$("#checkIt").click(function(e) {
  e.preventDefault();
  alert($("#post_text").val());
});

$(document).ready(function(e) {
  $("#post_info").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "ajax/create_post.php",
      data: new FormData(this),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function() {
        $(".submitBtn").attr("disabled", "disabled");
        $("#post_info").css("opacity", ".5");
      },
      success: function(response) {
        $(".statusMsg").html("");
        if (response.status == 1) {
          $("#post_info")[0].reset();
          $(".statusMsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
          $("#editor").text("");
        } else {
          $(".statusMsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }
        $("#post_info").css("opacity", "");
        $(".submitBtn").removeAttr("disabled");
      }
    });
  });

  $("#post_photo").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ["image/jpg", "image/jpeg"];

    if (!(fileType == match[0] || fileType == match[1])) {
      alert("Sorry, only JPG & JPEG files are allowed to upload");
      $("#post_photo").val("");
      return false;
    }
  });
});

$(".delete_post").click(function() {
  var del_id = $(this).attr("id");

  $.ajax({
    type: "POST",
    url: "ajax/delete_post.php",
    data: { del_id: del_id },
    dataType: "json",
    success: function(response) {
      $(".statusMsg").html("");
      if (response.status == 1) {
        $(".statusMsg").html(
          '<p class="alert alert-success">' + response.message + "</p>"
        );
        $('.posts').hide();
      } else {
        $(".statusMsg").html(
          '<p class="alert alert-danger">' + response.message + "</p>"
        );
      }
    }
  });
});

$(document).ready(function() {
  $(".moreBox")
    .slice(0, 5)
    .show();
  if ($(".carBox:hidden").length != 0) {
    $("#loadMore").show();
  }
  $("#loadMore").on("click", function(e) {
    e.preventDefault();
    $(".moreBox:hidden")
      .slice(0, 5)
      .slideDown();
    if ($(".moreBox:hidden").length == 0) {
      $("#loadMore").fadeOut("slow");
    }
  });
});

$(document).ready(function(e){
	$("#post_search").keyup(function(){
		$("#post_show").show();
    $("#close").hide();
		var text = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'ajax/search.php',
			data: 'txt=' + text,
			success: function(data){
				$("#post_show").html(data);
        $("#search").hide();
        $("#close").show();
			}
		});
	})
});

$( "#close" ).click(function() {
  $( this).hide();
  $("#search").show();
  $("#post_show").hide();
});

$("#send_mess").click(function() {
  var contact_name = $("#contact-name").val();
  var contact_email = $("#contact-email").val();
  var contact_subject = $("#contact-subject").val();
  var contact_message = $("#contact-message").val();

  $.ajax({
    url: "ajax/mail.php",
    type: "POST",
    cache: false,
    data: {
      "contact-name": contact_name,
      "contact-email": contact_email,
      "contact-subject": contact_subject,
      "contact-message": contact_message,
    },
    dataType: "html",
    success: function(data) {
      if (data == "SUCCESS") {
        $("#send_mess").text("Success");
        $("#error").hide();
        $("#success").show();
        $("#contact-name").val("");
        $("#contact-email").val("");
        $("#contact-subject").val("");
        $("#contact-message").val("");
      } else {
        $("#error").show();
        $("#error").text(data);
      }
    }
  });
});
