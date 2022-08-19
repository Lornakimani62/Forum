<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Elections Forum | Dashbord</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" >

<style>
  body{
    background-color: #eef2f5;
}
.container{
  background-color: #eef2f5;

}
.addtxt{
	padding-top: 10px;
	padding-bottom: 10px;
  width: 700px;
	text-align: center;
	font-size: 13px;
	background-color: #e5e8ed;
	font-weight: 500;
}
.form-control: focus{
	color: #000;
}
.second{
	width: 700px;
	background-color: white;
	border-radius: 4px;
	box-shadow: 10px 10px 5px #aaaaaa;
}
.text1{
	font-size: 13px;
    font-weight: 500;
    color: #56575b;
}
.text2{
	font-size: 13px;
    font-weight: 500;
    margin-left: 6px;
    color: #56575b;
}
.text3{
	font-size: 13px;
    font-weight: 500;
    margin-right: 4px;
    color: #828386;
}
.text3o{
	color: #00a5f4;

}
.text4{
	font-size: 13px;
    font-weight: 500;
    color: #828386;
}
.text4i{
	color: #00a5f4;
}
.text4o{
	color: white;
}
.thumbup{
	font-size: 13px;
    font-weight: 500;
    margin-right: 5px;
}
.thumbupo{
	color: #17a2b8;
}
</style>
</head>
<body>
@include('includes.navbar', ['user' => $user])
<div class="container mt-2">

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
          
    <div class="container justify-content-center mt-5">
    <div class="d-flex justify-content-center pt-3 pb-2"> <a class="btn btn-outline-success" href="{{ route('create') }}"> Add Comment</a></div>
    @foreach ($remarks as $remark)
    <div class="d-flex justify-content-center py-2">
        <div class="second py-2 px-2"> <span class="text1">{{$remark->comment}}</span>
            <div class="d-flex justify-content-between py-1 pt-2">
                <div><div  width="18"><span class="text2">{{$remark->created_by}}</div></div>
                <div><span class="text3">{{$remark->created_at}}</span></div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{!! $remarks->links() !!}
</body>
</html>