$(function(){
    var curpage = "";
    var passingData;

    function StartLoading()
    {
            loading = new Boxy("<div align='center'><img src='img/loading.gif' alt='loading' /></div>",{
                            title: "Loading Page",
                            closeable:false,
                            modal: true
            });
    }

    $.ajax({

            url: "home.php",
            type : "POST",
            success : function(result){
                    $("#content").empty().append(result);

            }
    });
	
     $(".home").click(function(){
 //       if(curpage != "home"){
            curpage = "home";
            StartLoading();
            $.ajax({

                    url: "home.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
  //      }
     })

     $(".about").click(function(){
            curpage = "about";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
     })
	 
	 function getOverview(){
            $.ajax({

                    url: "overview.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".About-Overview").click(function(){
        if(curpage != "About-Overview"){
            curpage = "About-Overview";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getOverview();
							
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getMilestone(){
            $.ajax({

                    url: "milestone.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".About-Milestone").click(function(){
        if(curpage != "About-Milestone"){
            curpage = "About-Milestone";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getMilestone();
							
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getVisiMisi(){
            $.ajax({

                    url: "visi-misi.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".About-VisiMisi").click(function(){
        if(curpage != "About-VisiMisi"){
            curpage = "About-VisiMisi";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getVisiMisi();
							
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getManagement(){
            $.ajax({

                    url: "management.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".About-Management").click(function(){
        if(curpage != "About-Management"){
            curpage = "About-Management";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getManagement();
							
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getCredentials(){
            $.ajax({

                    url: "credentials.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".About-Credentials").click(function(){
        if(curpage != "About-Credentials"){
            curpage = "About-Credentials";
            StartLoading();

            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getCredentials();
							
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 

     $(".services").click(function(){
            curpage = "services";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
     })
	 
	 function getServicesEquity(){
            $.ajax({

                    url: "equity.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".Services-Equity").click(function(){
        if(curpage != "Services-Equity"){
            curpage = "Services-Equity";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getServicesEquity();
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getServicesFixedIncome(){
            $.ajax({

                    url: "fixed-income.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".Services-FixedIncome").click(function(){
        if(curpage != "Services-FixedIncome"){
            curpage = "Services-FixedIncome";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getServicesFixedIncome();
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getServicesAdvisory(){
            $.ajax({

                    url: "advisory.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".Services-Advisory").click(function(){
        if(curpage != "Services-Advisory"){
            curpage = "Services-Advisory";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getServicesAdvisory();
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getServicesUnderwriting(){
            $.ajax({

                    url: "underwriting.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".Services-Underwriting").click(function(){
        if(curpage != "Services-Underwriting"){
            curpage = "Services-Underwriting";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getServicesUnderwriting();
                            loading.hideAndUnload();
                    }
            });
		}
     })
	 
	 function getServicesArranging(){
            $.ajax({

                    url: "arranging.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });	 
	 }
	 
     $(".Services-Arranging").click(function(){
        if(curpage != "Services-Arranging"){
            curpage = "Services-Arranging";
            StartLoading();

            $.ajax({

                    url: "services.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
							$("#isi").empty();
							getServicesArranging();
                            loading.hideAndUnload();
                    }
            });
		}
     })
	
     $(".news").click(function(){
 //       if(curpage != "home"){
            curpage = "news";
            StartLoading();
            $.ajax({

                    url: "news.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
  //      }
     })
	 
     $(".download").click(function(){
        if(curpage != "download"){
            curpage = "download";
            StartLoading();

            $.ajax({

                    url: "download.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
		}
     })

     $(".contact").click(function(){
        if(curpage != "contact"){
            curpage = "contact";
            StartLoading();

            $.ajax({

                    url: "contact.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
		}
     })

     $(".link").click(function(){
        if(curpage != "link"){
            curpage = "link";
            StartLoading();

            $.ajax({

                    url: "link.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
		}
     })

});
 $(".Online Trading TRIAL").click(function(){
        if(curpage != "OnTradTrial"){
            curpage = "OnTradTrial";
            StartLoading();

            $.ajax({
                    
					
                    url: "OnTradTrial.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
		}
     })


