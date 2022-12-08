import 'package:flutter/material.dart';

void main() {
  runApp(
    MaterialApp(
      home: Scaffold(
        backgroundColor: Color.fromARGB(255, 255, 218, 218),
        appBar: AppBar(
          title: Center(
            child: Text('AlieN Ware'),
          ),
          backgroundColor: Color.fromARGB(255, 255, 119, 0),
        ),
        body: Center(
          child: Image(
            image: AssetImage('images/rog.jpg'),
          ),
        ),
      ),
    ),
  );
}
