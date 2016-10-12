@extends('backend.layouts.layout')
@section('title','Blog')
@section('small_title','New')
@section('body')
<html>
<head>
<title>Blog_list</title>
</head>
<body>
<table border="1">
<tr>
<th>Blog Title</th>
<th>Blog Content</th>
<th>Blog Image</th>
<th><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a></th>
<th><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">delete</a></th>
</tr>
