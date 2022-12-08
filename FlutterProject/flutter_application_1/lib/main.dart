// this is my first application
import 'package:flutter/material.dart';

//the main function is the starting point for all our flutter app orprojects
void main() {
  runApp(
    MaterialApp(
        home: Scaffold(
      body: Center(
        child: Text('hello worid',
        style: TextStyle(fontSize: 34),
        ),
      ),
      backgroundColor: Color.fromARGB(255, 255, 59, 59),
      appBar: AppBar(
        backgroundColor: Colors.black,
        title: Center(
          child: Text(
            'NithZ',
            style: TextStyle(fontSize: 34),
          ),
        ),
      ),
    )),
  );
}
