
<!DOCTYPE html>
<html>
<head>
    <title>Add Names</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class ="flex  m-2 p-2">
                <a href ="{{route('names.index')}}"
               class="px-4 py-2   text-gray-700 bg-white  dark:text-gray-200 dark:bg-gray-800 rounded-lg">Back</a>
            </div>
            <div class="p-2 m-2 bg-slate-100 rounded" >
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form Method="POST" action="{{route("names.store")}}" enctype="multipart/form-data">
                        @csrf
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700">First Name </label>
                        <div class="mt-1">
                          <input type="text" id="first_name"  name="first_name" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
                        </div>
                      </div>
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Last Name </label>
                        <div class="mt-1">
                          <input type="text" id="last_name"  name="last_name" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
                        </div>
                    </div>
                      <div class="mt-6 p-4">
                      <button type ="submit" class="px-4 py-2 text-gray-700 bg-white  dark:text-gray-200 dark:bg-gray-800 rounded-lg">ADD</button>
                      </div>
                    </form>
                  </div>
            </div>
            
    </div>
    
        </div>
    </div>
