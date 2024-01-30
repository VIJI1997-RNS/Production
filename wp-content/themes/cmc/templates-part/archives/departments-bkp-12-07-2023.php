<section class="departments-sec">
    <div class="container">
        <div class="row">
          <style>
          .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 80%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
          }

          .naccordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 80%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
          }

          .active, .accordion:hover {
            background-color: #ccc;
          }

          .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
          }
          .column {
            float: left;
         width: 33.33%;
         padding: 10px;
         height: 2000px;
	}
  .row:after {
  content: "";
  display: table;
  clear: both;
}
          </style>
	<div class="row">
	   <div class="column">
	     <h2><font color=#012068 style="text-decoration: none; color:#012068">Clinical</font></h2>
       <br></br>
		 <p>
       <button class="naccordion">
         <div id="accidentem"> <a href="#"></a></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 's5zqk7R9qmJCRNi4r') {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           //console.log(completedata.data[2].name);
           document.getElementById('accidentem').innerHTML=data1;
         })
       </script>


       </button>

</p>

<p>
  <button class="naccordion">
    <div id="anaesthesia"> <a href="#"></a></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == '5bgb3ktSiTc6iaTEj') {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('anaesthesia').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="biomedicalscience"> <a href="#"></a></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'RSoZTFrjB9rnPrWQR')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('biomedicalscience').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="biochemistry"> <a href="#"></a></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'xkPcefJw7CHBvgJtm')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('biochemistry').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="cardiothoracicsurgery"> <a href="#"></a></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'shCmJFtuoB7tpifPu')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('cardiothoracicsurgery').innerHTML=data1;
    })
  </script>
  </button>
</p>

<p>
  <button class="naccordion">
    <div id="centreforstemcell"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'GAdqRoPAq4JjiuTWW')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('centreforstemcell').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="childhealth"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'Cibppqvzp5YGsBRZK')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('childhealth').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="clinicalbiochemistry"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'rSRYRQQk5cunqRt85')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('clinicalbiochemistry').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="clinicalhematology"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'Zscuha7GCgc9ehcd5')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('clinicalhematology').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="clinicalvirology"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'sWYFPwSnhJgofZoSf')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('clinicalvirology').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="communityhealthlcecu"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'SnZWpioCxYtAbKKyt')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('communityhealthlcecu').innerHTML=data1;
    })
  </script>

  </button>
</p>
<p>
  <button class="naccordion">
    <div id="communityhealthsshs"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'uPgJ5Nuh6RbXBqx3F')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('communityhealthsshs').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="criticalcaremedicine"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'cDMMPpoaqSv68WzaH')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('criticalcaremedicine').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="dentalsurgery"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'puve7YGnWDjnLBsau')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('dentalsurgery').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="developmentpaediatrics"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'q4kNKCTppRsxY6iyS')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('developmentpaediatrics').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="dietetics"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'KwPF2h5quHfjBofTp')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('dietetics').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="endocrinology"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'wGQEBsLvrLvSNruhE')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('endocrinology').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="familymedicine"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'Twj7BcH2zSfJDEcYb')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('familymedicine').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="forensicmedicine"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'rcLXiWZhv3LZvsKR5')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('forensicmedicine').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="gastroenterology"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'S4HTx39WDCQ4J5gTX')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('gastroenterology').innerHTML=data1;
    })
  </script>

  </button>
</p>

<p>
  <button class="naccordion">
    <div id="genitourinarysurgery"></div>
    <script>
    fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
    //console.log(data);
    return data.json();
    }).then((completedata)=>{
      let data1="";
      completedata.data.map((values)=>{
        if (values._id == 'inBZaFmm4D6tTdpZt')  {
        data1+=` <div>
        <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
        </div>`;
      }
      });
      document.getElementById('genitourinarysurgery').innerHTML=data1;
    })
  </script>

  </button>
</p>
	   </div>
	   <div class="column">
	     <h2><font color=#012068 style="text-decoration: none; color:#012068">General Services</font></h2>
       <br></br>
		 <p>
       <button class="naccordion">
         <div id="chaplaincy"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'b7eHrhq6HpqotxY2f')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('chaplaincy').innerHTML=data1;
         })
       </script>

       </button>
     </p>
     <p>
       <button class="naccordion">
         <div id="chips"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'kGAxxHHi5urZLtAN8')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('chips').innerHTML=data1;
         })
       </script>

       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="hospitalmanagementstudies"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'La6QzweevXbXNFFfR')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('hospitalmanagementstudies').innerHTML=data1;
         })
       </script>

       </button>
     </p>

	   </div>
	   <div class="column">
	     <h2><font color=#012068 style="text-decoration: none; color:#012068">Others</font></h2>
       <br></br>
		 <p>
       <button class="naccordion">
         <div id="anatomy"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'WPt94eJfqYvshQAXt')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('anatomy').innerHTML=data1;
         })
       </script>
       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="bioengineering"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == '2mCChYqfQJkBGFCMR')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('bioengineering').innerHTML=data1;
         })
       </script>
       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="biostatistics"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'qJMPBFXveP8ztq4gA')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('biostatistics').innerHTML=data1;
         })
       </script>
       </button>
     </p>
     <p>
       <button class="naccordion">
         <div id="cytogenetics"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'yfxToJASc8Bje9jG5')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('cytogenetics').innerHTML=data1;
         })
       </script>
       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="medicaleducation"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'CnTnxCdCz9JbwLuih')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('medicaleducation').innerHTML=data1;
         })
       </script>
       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="pharmacology"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'ZeWonNTSbbinGMRvj')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('pharmacology').innerHTML=data1;
         })
       </script>
       </button>
     </p>
     <p>
       <button class="naccordion">
         <div id="pharmacy"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'fba6z5scDoC9trpeS')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('pharmacy').innerHTML=data1;
         })
       </script>
       </button>
     </p>

     <p>
       <button class="naccordion">
         <div id="physiology"></div>
         <script>
         fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
         //console.log(data);
         return data.json();
         }).then((completedata)=>{
           let data1="";
           completedata.data.map((values)=>{
             if (values._id == 'rBeZBCE4bJYEzcQft')  {
             data1+=` <div>
             <h6><font color=#012068><a style="text-decoration: none; color:#012068" href="http://localhost/wordpress/index.php/finaltest?deptID=${values._id}">${values.name}</a></font></h6>
             </div>`;
           }
           });
           document.getElementById('physiology').innerHTML=data1;
         })
       </script>
       </button>
     </p>
	   </div>
	</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>





        </div>
    </div>
</section>
<!-- Contact Information Section Start Here -->
<section class="contact-info mt-4 mt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-headings">
                    <h2><?php the_field('contact_info_heading' , 'option'); ?></h2>
                </div>
                <div class="row g-5">
                    <?php
                    // Check rows existexists.
                    if (have_rows('contact_info', 'option')) :
                        // Loop through rows.
                        while (have_rows('contact_info' , 'option')) : the_row();
                    ?>
                            <div class="col-md-4 position-relative">
                                <div class="border-right">
                                    <span><?php echo get_sub_field('heading' , 'option'); ?></span>
                                    <?php echo get_sub_field('content' , 'option'); ?>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Information Section End Here -->

