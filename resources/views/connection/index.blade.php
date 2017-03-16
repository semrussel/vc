@extends('layouts.app')
<style>
/*Now the CSS*/
* {margin: 0; padding: 0;}

.tree ul {
  padding-top: 20px; position: relative;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

.tree li {
  float: left; text-align: center;
  list-style-type: none;
  position: relative;
  padding: 20px 5px 0 5px;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
  content: '';
  position: absolute; top: 0; right: 50%;
  border-top: 1px solid #ccc;
  width: 50%; height: 20px;
}
.tree li::after{
  right: auto; left: 50%;
  border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
  display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
  border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
  border-right: 1px solid #ccc;
  border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
  border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
  content: '';
  position: absolute; top: 0; left: 50%;
  border-left: 1px solid #ccc;
  width: 0; height: 20px;
}

.tree li a{
  border: 1px solid #ccc;
  padding: 5px 10px;
  text-decoration: none;
  color: #666;
  font-family: arial, verdana, tahoma;
  font-size: 11px;
  display: inline-block;
  
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
  background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
  border-color:  #94a0b4;
}

</style>
@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">@if(isset($_GET['id'])) {{ getNickName($_GET['id'])."'s" }} @endif Cell Group </div>
        </div>
        <div class="box-body">
          @if(!isset($_GET['id']))
            <div class="tree">
              <ul>
                <li>
                  <a href="#">Parent</a>
                  <ul>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                    <li> <a href="#">Child</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
          @else
            <?php
              $id = $_GET['id'];
              $connections = getConnection($id);
            ?>

            <div class="tree">
              <ul>
                <li>
                  <a href="{{ url('/connections?id='.$id) }}">{{ getFullName($id) }}</a>
                  @if(count($connections) != 0)
                    <ul>
                      @foreach($connections as $connection)
                        <li> <a href="{{ url('/connections?id='.$connection->disciple_id) }}">{{ getFullName($connection->disciple_id) }}</a> </li>
                      @endforeach
                    </ul>
                  @endif
                </li>
              </ul>
            </div>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection  