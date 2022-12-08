import 'dart:ui';

import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        backgroundColor: Color.fromARGB(255, 227, 0, 0),
        body: SafeArea(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              CircleAvatar(
                radius: 50.0,
                backgroundColor: Colors.white,
                backgroundImage: AssetImage('images/logo.png'),
              ),
              Text(
                'Nithish Koriyar',
                style: TextStyle(
                  fontFamily: 'Pacifico',
                  fontSize: 37.4,
                  color: Color.fromARGB(255, 255, 255, 255),
                  fontWeight: FontWeight.bold,
                ),
              ),
              Text(
                'FLUTTER DEVELOPER',
                style: TextStyle(
                  fontFamily: 'RubikGlitch',
                  fontSize: 15.4,
                  color: Color.fromARGB(255, 228, 228, 228),
                  letterSpacing: 5.5,
                ),
              ),
              SizedBox(
                height: 20.0,
                width: 400.0,
                child: Divider(color: Color.fromARGB(255, 184, 184, 184)),
              ),
              Container(
                padding: EdgeInsets.all(10.0),
                color: Color.fromARGB(255, 255, 255, 255),
                margin: EdgeInsets.symmetric(vertical: 10.0, horizontal: 25.0),
                child: Row(
                  children: <Widget>[
                    Icon(
                      Icons.phone,
                      color: Color.fromARGB(255, 255, 0, 0),
                    ),
                    SizedBox(
                      width: 10.0,
                    ),
                    Text(
                      "+91 9876543210",
                      style: TextStyle(
                        color: Colors.teal.shade900,
                        fontSize: 15.4,
                      ),
                    ),
                  ],
                ),
              ),
              Container(
                padding: EdgeInsets.all(10.0),
                color: Colors.white,
                margin: EdgeInsets.symmetric(vertical: 10.0, horizontal: 25.0),
                child: Row(
                  children: <Widget>[
                    Icon(
                      Icons.email,
                      color: Color.fromARGB(255, 255, 0, 0),
                    ),
                    SizedBox(
                      width: 10.0,
                    ),
                    Text(
                      "nithishkoriyar@gmail.com",
                      style: TextStyle(
                        color: Colors.teal.shade900,
                        fontSize: 15.4,
                      ),
                    ),
                  ],
                ),
              ),
              Container(
                padding: EdgeInsets.all(10.0),
                color: Colors.white,
                margin: EdgeInsets.symmetric(vertical: 10.0, horizontal: 25.0),
                child: Row(
                  children: <Widget>[
                    Icon(
                      Icons.search,
                      color: Color.fromARGB(255, 255, 0, 0),
                    ),
                    SizedBox(
                      width: 10.0,
                    ),
                    Text(
                      "www.nithish.tech",
                      style: TextStyle(
                        color: Colors.teal.shade900,
                        fontSize: 15.4,
                      ),
                    ),
                  ],
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
