$(document).ready(function(){
  var toolName;
  var toolLink;

  $("#tools-add").click(function(){
    toolName = $("#toolsName").val();
    toolLink = $("#toolsLink").val();
    $("#tools-list").append('<li><input type="text" name="tools['+toolName+']['+toolLink+']" style="display:none"></li>');
    $("#tools-list").append('<li>Tool name: '+toolName+'</li>');
    $("#tools-list").append('<li>Tool link: '+toolLink+'</li>');
  });


  var socialName;
  var socialLink;

  $("#socials-add").click(function(){
    socialName = $("#socialsName").val();
    socialLink = $("#socialsLink").val();
    $("#socials-list").append('<li><input type="text" name="socials['+socialName+']['+socialLink+']" style="display:none"></li>');
    $("#socials-list").append('<li>Social name: '+socialName+'</li>');
    $("#socials-list").append('<li>Social link: '+socialLink+'</li>');
  });

  var referenceName;
  var referenceStartDate;
  var referenceEndDate;
  var referenceDescription;
  var referenceBossTitle;
  var referenceBossName;
  var referenceAddressName;
  var referencePhoneNumber;
  var referenceEmail;
  var referenceCount = 0;
  $("#reference-add").click(function(){
    referenceName = $("#referenceTitle").val();
    referenceStartDate = $("#referenceStartDate").val();
    referenceEndDate = $("#referenceEndDate").val();
    referenceDescription = $("#referenceDescription").val();
    referenceBossTitle = $("#referenceBossTitle").val();
    referenceBossName = $("#referenceBossName").val();
    referenceAddressName = $("#referenceAddress").val();
    referencePhoneNumber = $("#referencePhoneNumber").val();
    referenceEmail = $("#referenceEmail").val();
    $("#reference-list").append('<ul id="'+(referenceCount++)+'">');
    $("#reference-list").append('<li><input type="text" name="references['+referenceName+']['+referenceStartDate+']['+referenceEndDate+']['+referenceDescription+']['+referenceBossTitle+']['+referenceBossName+']['+referenceAddressName+']['+referencePhoneNumber+']['+referenceEmail+']" style="display:none"></li>');
    $("#reference-list").append('<li>Reference Name: '+referenceName+'</li>');
    $("#reference-list").append('<li>Reference Start Date: '+referenceStartDate+'</li>');
    $("#reference-list").append('<li>Reference Name: '+referenceEndDate+'</li>');
    $("#reference-list").append('<li>Reference Description: '+referenceDescription+'</li>');
    $("#reference-list").append('<li>Reference Boss Title: '+referenceBossTitle+'</li>');
    $("#reference-list").append('<li>Reference Boss Name: '+referenceBossName+'</li>');
    $("#reference-list").append('<li>Reference Address Name: '+referenceAddressName+'</li>');
    $("#reference-list").append('<li>Reference Phone Number: '+referencePhoneNumber+'</li>');
    $("#reference-list").append('<li>Reference Email: '+referenceEmail+'</li>');
    $("#reference-list").append('</ul>');
  });

  $(".delete-reference").click(function(){
    $("#"+this.id).remove();
    $(".delete-reference-list").append('<li><input type="text" name="referencesDelete['+this.id+']" style="display:none"></li>');
  });

  var socialName;
  var socialLink;

  $("#socials-add").click(function(){
    socialName = $("#socialsName").val();
    socialLink = $("#socialsLink").val();
    $("#socials-list").append('<li><input type="text" name="socials['+socialName+']['+socialLink+']" style="display:none"></li>');
    $("#socials-list").append('<li>Social name: '+socialName+'</li>');
    $("#socials-list").append('<li>Social link: '+socialLink+'</li>');
  });
});
