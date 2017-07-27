<?php
use App\Connection;

function getConnection($id){
	$connections = DB::table('connections')->where('discipler_id',$id)->get();

	return $connections;
}

function getFullName($id){
	$disciple = DB::table('disciples')->where('id',$id)->get();
	$fullName = $disciple[0]->firstName.' '.$disciple[0]->lastName;
	return $fullName;
}
function getNickName($id){
	$disciple = DB::table('disciples')->where('id',$id)->get();
	return $disciple[0]->nickName;
}

function getFullNickName($id){
	$disciple = DB::table('disciples')->where('id',$id)->get();
	return $disciple[0]->nickName.' '.$disciple[0]->lastName;
}
?>