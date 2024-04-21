{{-- <script src="https://cdn.tailwindcss.com"></script>

<form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-6 left-3">
            <i class="fa fa-search h-10 w-10 text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text" name="search" class="h-20 w-10 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search Property..."/>
        <div class="absolute top-4 right-2">
            <button type="submit" class="h-10 w-20 text-white rounded-lg bg-green-400 hover:bg-green-600">
                Search
            </button>
        </div>
    </div>
</form> --}}
<style>
    .searchouter{

        position:relative; 
        border:2px gray 100; 
        margin:4px;
        border-radius: 10px
    }
    .search_icon_container{
        position:absolute;
        display: inline-block;
         margin-top:14;
         margin-left:3;
    }
    .search_icon_container i{
        margin-top: 27px;
        margin-left: 240px
    }
    .search_btn{
    
        height:50px;
        width:100px;
        color:white;
        border-radius: 10px;
        background:#3cce74;
        border:2px solid #3cce74;
    }
    .search_btn:hover{
        background:#2d9b57;
    }
    .search_btn_container{
        display: inline-block;
        position:absolute;
        margin-top:10px; 
        margin-right:2px;
        margin-left: -110px
    }
    .search_text_area{
        height:70px; 
        width:65%;
         padding-left:50px; 
         padding-right:50px; 
         border-radius: 10px; 
         margin-left: 225px;
      
  
    }

    </style>
  
<form action="">
    <div class="searchouter">
        <div class="search_icon_container">
            <i class="fa fa-search "></i>
        </div>
        <input type="text" name="search" class="search_text_area" placeholder="Search Property..."/>
        <div class="search_btn_container">
            <button type="submit" class="search_btn">
                Search
            </button>
        </div>
    </div>
</form>