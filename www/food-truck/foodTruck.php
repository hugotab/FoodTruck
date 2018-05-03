<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Food-Truck</title>

    <!--rendre responsive le menu -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="foodTruck.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

</head>

<body>


        <div class="logo">

            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMS44OTYgNTExLjg5NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjg5NiA1MTEuODk2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIzNi4xODcsMjg3Ljk0aC0wLjA4NmMtMi4yMDIsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI4LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzI0MC4xODYsMjg5LjcyOSwyMzguMzksMjg3Ljk0LDIzNi4xODcsMjg3Ljk0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4Ni41MjYsMjkwLjkyNWMtMTMuOTQyLTEyLjIxNy0zNC4zMTItMjkuMTQzLTM5LjE3OC0zMy4xNzZjLTMuNjU1LTE2Ljc2Ni0yNi4yNjctMTEzLjc3NC01OS40MzktMTEzLjc3NEgyNy45OTQgICAgYy0yLjIxMSwwLTQsMS43ODktNCwzLjk5OWMwLDIuMjEsMS43OSwzLjk5OSw0LDMuOTk5aDM1OS45MTVjMjAuOTQsMCw0Mi45NTEsNjYuNzM5LDUxLjkxLDEwOC44MDcgICAgYzAuMTg3LDAuODgyLDAuNjcyLDEuNjc1LDEuMzY2LDIuMjQ5YzAuMjQyLDAuMTk5LDI0LjMxNSwyMC4xLDQwLjA3NywzMy45MWMxNC40MjYsMTIuNjM3LDE0LjYzNyw1MC42MTMsMTQuNjM3LDUwLjk4OCAgICBjMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5YzIuMjEsMCwzLjk5OS0xLjc5NywzLjk5OS0zLjk5OUM1MDMuODk3LDM0Ni4yMjQsNTAzLjY4NiwzMDUuOTUyLDQ4Ni41MjYsMjkwLjkyNXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xMS45OTgsMTU5Ljk3Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTl2MTgzLjk1OGMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTljMi4yMTEsMCwzLjk5OS0xLjc5LDMuOTk5LTQgICAgVjE2My45NjlDMTUuOTk3LDE2MS43NTksMTQuMjA5LDE1OS45NywxMS45OTgsMTU5Ljk3eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM3OS45MTEsMzY3LjkyMkgxNzkuOTU4Yy0yLjIxLDAtMy45OTksMS43ODgtMy45OTksMy45OTljMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5aDE5OS45NTMgICAgYzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMzgzLjkxLDM2OS43MSwzODIuMTIyLDM2Ny45MjIsMzc5LjkxMSwzNjcuOTIyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwNy44ODEsMzY3LjkyMmgtMzkuOTljLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloMzkuOTkgICAgYzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTlDNTExLjg4LDM2OS43MSw1MTAuMDkyLDM2Ny45MjIsNTA3Ljg4MSwzNjcuOTIyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwNy44OTcsMzUxLjkyNmMtMi4yMSwwLTMuOTk5LDEuNzg4LTMuOTk5LDMuOTk5bC0wLjAxNiwxNS45OTZjMCwyLjIwMiwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OSAgICBjMi4yMTEsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OWwwLjAxNi0xNS45OTZDNTExLjg5NiwzNTMuNzIyLDUxMC4xMDgsMzUxLjkyNiw1MDcuODk3LDM1MS45MjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTA3Ljg5NiwzNTEuOTI2aC0xNi4wMTJjLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloMTYuMDEyICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5QzUxMS44OTUsMzUzLjcxNCw1MTAuMTA3LDM1MS45MjYsNTA3Ljg5NiwzNTEuOTI2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI5OS45MywxNTEuOTcyYy0yLjIxMSwwLTQsMS43ODktNCwzLjk5OXYyMDcuNjA4YzAsMi4yMSwxLjc4OSwzLjk5OSw0LDMuOTk5YzIuMjEsMCwzLjk5OC0xLjc4OSwzLjk5OC00VjE1NS45NzEgICAgQzMwMy45MjgsMTUzLjc2MSwzMDIuMTQsMTUxLjk3MiwyOTkuOTMsMTUxLjk3MnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MTEuOTAzLDE4My45NjVjLTIuMjEsMC0zLjk5OCwxLjc4OS0zLjk5OCwzLjk5OXY3MS45ODNjMCwyLjIxLDEuNzg4LDMuOTk5LDMuOTk4LDMuOTk5YzIuMjExLDAsNC0xLjc4OSw0LTMuOTk5ICAgIHYtNzEuOTgzQzQxNS45MDMsMTg1Ljc1NCw0MTQuMTE0LDE4My45NjUsNDExLjkwMywxODMuOTY1eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ0My44OTYsMjU1Ljk0OGgtMzEuOTkzYy0yLjIxLDAtMy45OTgsMS43ODktMy45OTgsMy45OTljMCwyLjIxLDEuNzg4LDMuOTk5LDMuOTk4LDMuOTk5aDMxLjk5MyAgICBjMi4yMSwwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5QzQ0Ny44OTUsMjU3LjczNyw0NDYuMTA2LDI1NS45NDgsNDQzLjg5NiwyNTUuOTQ4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyMS42MiwxODMuOTY1aC05LjcxN2MtMi4yMSwwLTMuOTk4LDEuNzg5LTMuOTk4LDMuOTk5YzAsMi4yMSwxLjc4OCwzLjk5OSwzLjk5OCwzLjk5OWg5LjcxNyAgICBjMi4yMTEsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OUM0MjUuNjE5LDE4NS43NTQsNDIzLjgzMSwxODMuOTY1LDQyMS42MiwxODMuOTY1eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTkxLjk3OSwzNjcuOTIySDRjLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloODcuOTc5ICAgIGMyLjIxLDAsMy45OTktMS43ODksMy45OTktMy45OTlDOTUuOTc4LDM2OS43MSw5NC4xODksMzY3LjkyMiw5MS45NzksMzY3LjkyMnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00LDM1MS43NjJjLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OXYxNi4xNmMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTljMi4yMTEsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OSAgICB2LTE2LjE2QzcuOTk5LDM1My41NSw2LjIxMSwzNTEuNzYyLDQsMzUxLjc2MnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yOC4wMjUsMzUxLjkyNkw0LjAzLDM1MS43NjJjLTAuMDE1LDAtMC4wMjMsMC0wLjAzMSwwYy0yLjE5NCwwLTMuOTgzLDEuNzczLTMuOTk5LDMuOTc2ICAgIGMtMC4wMTUsMi4yMDIsMS43NjYsNC4wMDYsMy45NjgsNC4wMjJsMjMuOTk1LDAuMTY0YzAuMDE1LDAsMC4wMjMsMCwwLjAzMSwwYzIuMTk1LDAsMy45ODQtMS43NzQsMy45OTktMy45NjggICAgQzMyLjAwOCwzNTMuNzM4LDMwLjIyOCwzNTEuOTQyLDI4LjAyNSwzNTEuOTI2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI3Ljk5NSwxNDMuOTc1Yy0xMS4wMjksMC0xOS45OTYsOC45NzEtMTkuOTk2LDE5Ljk5NWMwLDIuMjExLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5YzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTkgICAgYzAtNi42MTUsNS4zODItMTEuOTk3LDExLjk5OC0xMS45OTdjMi4yMSwwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5UzMwLjIwNSwxNDMuOTc1LDI3Ljk5NSwxNDMuOTc1eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM3OS45MTEsMTgzLjk2NWgtNTUuOTg2Yy02LjYxNiwwLTExLjk5Nyw1LjM4MS0xMS45OTcsMTEuOTk3djU1Ljk4N2MwLDYuNjE1LDUuMzgxLDExLjk5NywxMS45OTcsMTEuOTk3aDU1Ljk4NiAgICBjNi42MTUsMCwxMS45OTctNS4zODIsMTEuOTk3LTExLjk5N3YtNTUuOTg3QzM5MS45MDgsMTg5LjM0NiwzODYuNTI2LDE4My45NjUsMzc5LjkxMSwxODMuOTY1eiBNMzgzLjkxLDI1MS45NDkgICAgYzAsMi4yMDctMS43OTYsMy45OTktMy45OTksMy45OTloLTU1Ljk4NmMtMi4yMDMsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OXYtNTUuOTg3YzAtMi4yMDcsMS43OTYtMy45OTksMy45OTktMy45OTloNTUuOTg2ICAgIGMyLjIwMywwLDMuOTk5LDEuNzkyLDMuOTk5LDMuOTk5VjI1MS45NDl6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzU1LjkxNywxODMuOTY1Yy0yLjIxMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djcxLjgxMWMwLDIuMjEsMS43ODgsMy45OTksMy45OTksMy45OTlzMy45OTktMS43ODksMy45OTktMy45OTkgICAgdi03MS44MTFDMzU5LjkxNiwxODUuNzU0LDM1OC4xMjgsMTgzLjk2NSwzNTUuOTE3LDE4My45NjV6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTEuOTg4LDE5OS45NjFjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjA3LTEuNzk2LDMuOTk5LTMuOTk5LDMuOTk5cy0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg5LTMuOTk5LTMuOTk5LTMuOTk5cy0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgxLDExLjk5OCwxMS45OTcsMTEuOTk4ICAgIGM2LjYxNiwwLDExLjk5OC01LjM4MiwxMS45OTctMTEuOTk4QzU1Ljk4NywyMDEuNzUsNTQuMTk4LDE5OS45NjEsNTEuOTg4LDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjcuOTg1LDE5OS45NjFjLTIuMjExLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NywzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDQsMC00LTEuNzkyLTQtMy45OTkgICAgYzAtMi4yMS0xLjc4OS0zLjk5OS0zLjk5OS0zLjk5OWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsNi42MTYsNS4zODIsMTEuOTk4LDExLjk5OCwxMS45OTggICAgYzYuNjE1LDAsMTEuOTk3LTUuMzgyLDExLjk5Ny0xMS45OThDNzEuOTg0LDIwMS43NSw3MC4xOTUsMTk5Ljk2MSw2Ny45ODUsMTk5Ljk2MXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik04My45ODEsMTk5Ljk2MWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTcsMy45OTktMy45OTksMy45OTljLTIuMjAzLDAtMy45OTktMS43OTItMy45OTktMy45OTkgICAgYzAtMi4yMS0xLjc4OS0zLjk5OS0zLjk5OS0zLjk5OWMtMi4yMTEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgxLDExLjk5OCwxMS45OTcsMTEuOTk4ICAgIGM2LjYxNSwwLDExLjk5Ny01LjM4MiwxMS45OTctMTEuOTk4Qzg3Ljk4LDIwMS43NSw4Ni4xOTEsMTk5Ljk2MSw4My45ODEsMTk5Ljk2MXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik05OS45NzcsMTk5Ljk2MWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTcsMy45OTktMy45OTksMy45OTljLTIuMjAzLDAtMy45OTktMS43OTItMy45OTktMy45OTkgICAgYzAtMi4yMS0xLjc4OS0zLjk5OS0zLjk5OS0zLjk5OWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsNi42MTYsNS4zODEsMTEuOTk4LDExLjk5NywxMS45OTggICAgYzYuNjE1LDAsMTEuOTk3LTUuMzgyLDExLjk5Ny0xMS45OThDMTAzLjk3NiwyMDEuNzUsMTAyLjE4NywxOTkuOTYxLDk5Ljk3NywxOTkuOTYxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTExNS45NzMsMTk5Ljk2MWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTYsMy45OTktMy45OTksMy45OTlzLTMuOTk5LTEuNzkyLTMuOTk5LTMuOTk5ICAgIGMwLTIuMjEtMS43ODktMy45OTktMy45OTktMy45OTljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgyLDExLjk5OCwxMS45OTcsMTEuOTk4ICAgIGM2LjYxNiwwLDExLjk5Ny01LjM4MiwxMS45OTctMTEuOTk4QzExOS45NzIsMjAxLjc1LDExOC4xODMsMTk5Ljk2MSwxMTUuOTczLDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTMxLjk2OSwxOTkuOTYxYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NiwzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDIsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg5LTMuOTk5LTMuOTk5LTMuOTk5Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCw2LjYxNiw1LjM4MiwxMS45OTgsMTEuOTk3LDExLjk5OCAgICBjNi42MTYsMCwxMS45OTgtNS4zODIsMTEuOTk3LTExLjk5OEMxMzUuOTY4LDIwMS43NSwxMzQuMTgsMTk5Ljk2MSwxMzEuOTY5LDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTQ3Ljk2NiwxOTkuOTYxYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NiwzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDIsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg4LTMuOTk5LTMuOTk5LTMuOTk5Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCw2LjYxNiw1LjM4MiwxMS45OTgsMTEuOTk3LDExLjk5OCAgICBjNi42MTYsMCwxMS45OTctNS4zODIsMTEuOTk4LTExLjk5OEMxNTEuOTY2LDIwMS43NSwxNTAuMTc3LDE5OS45NjEsMTQ3Ljk2NiwxOTkuOTYxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE2My45NjIsMTk5Ljk2MWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTYsMy45OTktMy45OTksMy45OTlzLTMuOTk5LTEuNzkyLTMuOTk5LTMuOTk5ICAgIGMwLTIuMjEtMS43ODktMy45OTktNC0zLjk5OWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsNi42MTYsNS4zODIsMTEuOTk4LDExLjk5OCwxMS45OTggICAgYzYuNjE2LDAsMTEuOTk3LTUuMzgyLDExLjk5Ny0xMS45OThDMTY3Ljk2MSwyMDEuNzUsMTY2LjE3MiwxOTkuOTYxLDE2My45NjIsMTk5Ljk2MXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNzkuOTU4LDE5OS45NjFjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjA3LTEuNzk2LDMuOTk5LTMuOTk5LDMuOTk5Yy0yLjIwMywwLTMuOTk5LTEuNzkyLTMuOTk5LTMuOTk5ICAgIGMwLTIuMjEtMS43ODktMy45OTktMy45OTktMy45OTljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgxLDExLjk5OCwxMS45OTcsMTEuOTk4ICAgIGM2LjYxNiwwLDExLjk5OC01LjM4MiwxMS45OTgtMTEuOTk4QzE4My45NTgsMjAxLjc1LDE4Mi4xNjgsMTk5Ljk2MSwxNzkuOTU4LDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTk1Ljk1NSwxOTkuOTYxYy0yLjIxMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTcsMy45OTktMy45OTksMy45OTljLTIuMjAzLDAtMy45OTktMS43OTItMy45OTktMy45OTkgICAgYzAtMi4yMS0xLjc5LTMuOTk5LTQtMy45OTljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgyLDExLjk5OCwxMS45OTgsMTEuOTk4ICAgIGM2LjYxNSwwLDExLjk5Ny01LjM4MiwxMS45OTctMTEuOTk4QzE5OS45NTQsMjAxLjc1LDE5OC4xNjUsMTk5Ljk2MSwxOTUuOTU1LDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjExLjk1MSwxOTkuOTYxYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NywzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDMsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg5LTMuOTk5LTMuOTk5LTMuOTk5Yy0yLjIxMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsNi42MTYsNS4zODEsMTEuOTk4LDExLjk5NywxMS45OTggICAgYzYuNjE1LDAsMTEuOTk3LTUuMzgyLDExLjk5Ny0xMS45OThDMjE1Ljk1LDIwMS43NSwyMTQuMTYxLDE5OS45NjEsMjExLjk1MSwxOTkuOTYxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIyNy45NDcsMTk5Ljk2MWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMDctMS43OTYsMy45OTktMy45OTksMy45OTljLTIuMjAzLDAtMy45OTktMS43OTItMy45OTktMy45OTkgICAgYzAtMi4yMS0xLjc4OS0zLjk5OS0zLjk5OS0zLjk5OWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsNi42MTYsNS4zODEsMTEuOTk4LDExLjk5NywxMS45OTggICAgYzYuNjE1LDAsMTEuOTk3LTUuMzgyLDExLjk5Ny0xMS45OThDMjMxLjk0NiwyMDEuNzUsMjMwLjE1NywxOTkuOTYxLDIyNy45NDcsMTk5Ljk2MXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNDMuOTQzLDE5OS45NjFjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjA3LTEuNzk2LDMuOTk5LTMuOTk5LDMuOTk5Yy0yLjIwMywwLTMuOTk5LTEuNzkyLTMuOTk5LTMuOTk5ICAgIGMwLTIuMjEtMS43ODktMy45OTktMy45OTktMy45OTljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDYuNjE2LDUuMzgyLDExLjk5OCwxMS45OTcsMTEuOTk4ICAgIGM2LjYxNiwwLDExLjk5Ny01LjM4MiwxMS45OTctMTEuOTk4QzI0Ny45NDIsMjAxLjc1LDI0Ni4xNTMsMTk5Ljk2MSwyNDMuOTQzLDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU5LjkzOSwxOTkuOTYxYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NiwzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDIsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg5LTMuOTk5LTMuOTk5LTMuOTk5Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCw2LjYxNiw1LjM4MiwxMS45OTgsMTEuOTk3LDExLjk5OCAgICBjNi42MTYsMCwxMS45OTctNS4zODIsMTEuOTk3LTExLjk5OEMyNjMuOTM4LDIwMS43NSwyNjIuMTUsMTk5Ljk2MSwyNTkuOTM5LDE5OS45NjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjc1LjkzNSwxOTkuOTYxYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIwNy0xLjc5NiwzLjk5OS0zLjk5OSwzLjk5OWMtMi4yMDIsMC0zLjk5OS0xLjc5Mi0zLjk5OS0zLjk5OSAgICBjMC0yLjIxLTEuNzg4LTMuOTk5LTMuOTk5LTMuOTk5Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCw2LjYxNiw1LjM4MiwxMS45OTgsMTEuOTk3LDExLjk5OCAgICBjNi42MTYsMCwxMS45OTctNS4zODIsMTEuOTk3LTExLjk5OEMyNzkuOTM0LDIwMS43NSwyNzguMTQ2LDE5OS45NjEsMjc1LjkzNSwxOTkuOTYxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM1Ljk5MiwxODMuOTY1Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTl2MTUuOTk2YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5ICAgIHYtMTUuOTk2QzM5Ljk5MSwxODUuNzU0LDM4LjIwMiwxODMuOTY1LDM1Ljk5MiwxODMuOTY1eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI3NS45MzUsMTgzLjk2NWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djE1Ljk5NmMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTkgICAgYzIuMjExLDAsMy45OTktMS43ODgsMy45OTktMy45OTl2LTE1Ljk5NkMyNzkuOTM0LDE4NS43NTQsMjc4LjE0NiwxODMuOTY1LDI3NS45MzUsMTgzLjk2NXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNzUuOTM1LDE4My45NjVIMzUuOTkyYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5aDIzOS45NDMgICAgYzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMjc5LjkzNCwxODUuNzU0LDI3OC4xNDYsMTgzLjk2NSwyNzUuOTM1LDE4My45NjV6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTQuODE1LDE2OS4xNDFjLTEuNTYyLTEuNTYyLTQuMDkzLTEuNTYyLTUuNjU1LDBsLTE1Ljk5NiwxNS45OTZjLTEuNTYyLDEuNTYyLTEuNTYyLDQuMDkzLDAsNS42NTUgICAgYzAuNzgyLDAuNzgsMS44MDUsMS4xNzEsMi44MjgsMS4xNzFzMi4wNDctMC4zOSwyLjgyNy0xLjE3bDE1Ljk5Ni0xNS45OTdDNTYuMzc3LDE3My4yMzQsNTYuMzc3LDE3MC43MDMsNTQuODE1LDE2OS4xNDF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjc4Ljc2MywxODUuMTM2bC0xNS45OTctMTUuOTk2Yy0xLjU2MS0xLjU2Mi00LjA5Mi0xLjU2Mi01LjY1NCwwYy0xLjU2MiwxLjU2Mi0xLjU2Miw0LjA5MywwLDUuNjU1bDE1Ljk5NiwxNS45OTcgICAgYzAuNzgxLDAuNzgsMS44MDUsMS4xNzEsMi44MjcsMS4xNzFjMS4wMjQsMCwyLjA0Ny0wLjM5LDIuODI4LTEuMTcyQzI4MC4zMjUsMTg5LjIyOSwyODAuMzI1LDE4Ni42OTgsMjc4Ljc2MywxODUuMTM2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1OS45NCwxNjcuOTY5SDUxLjk4OWMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMTEsMS43ODksMy45OTksMy45OTksMy45OTloMjA3Ljk1ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg5LDQtMy45OTlDMjYzLjkzOSwxNjkuNzU4LDI2Mi4xNTEsMTY3Ljk2OSwyNTkuOTQsMTY3Ljk2OXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MS45ODksMjE1Ljk1N2MtMi4yMSwwLTMuOTk5LDEuNzg4LTMuOTk5LDMuOTk5djg3Ljk3OWMwLDIuMjExLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5YzIuMjEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OSAgICB2LTg3Ljk3OUM1NS45ODgsMjE3Ljc0NSw1NC4xOTksMjE1Ljk1Nyw1MS45ODksMjE1Ljk1N3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNjcuOTM3LDMxMS45MzRINDMuOTljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSw0YzAsMi4yMSwxLjc4OSwzLjk5OCwzLjk5OSwzLjk5OGgyMjMuOTQ3ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk4QzI3MS45MzYsMzEzLjcyMywyNzAuMTQ4LDMxMS45MzQsMjY3LjkzNywzMTEuOTM0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1OS45MzksMjE1Ljk1N2MtMi4yMSwwLTMuOTk5LDEuNzg4LTMuOTk5LDMuOTk5djg3Ljk3OWMwLDIuMjExLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5di04Ny45NzlDMjYzLjkzOCwyMTcuNzQ1LDI2Mi4xNSwyMTUuOTU3LDI1OS45MzksMjE1Ljk1N3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjMuOTAxLDMyNy45MzFjLTIyLjA1LDAtMzkuOTkxLDE3Ljk0MS0zOS45OTEsMzkuOTkxczE3Ljk0MSwzOS45OSwzOS45OTEsMzkuOTljMjIuMDQ5LDAsMzkuOTktMTcuOTQsMzkuOTktMzkuOTkgICAgUzQ0NS45NSwzMjcuOTMxLDQyMy45MDEsMzI3LjkzMXogTTQyMy45MDEsMzk5LjkxM2MtMTcuNjQ0LDAtMzEuOTkzLTE0LjM1Ni0zMS45OTMtMzEuOTkyYzAtMTcuNjM3LDE0LjM0OC0zMS45OTMsMzEuOTkzLTMxLjk5MyAgICBjMTcuNjQ0LDAsMzEuOTkyLDE0LjM1NywzMS45OTIsMzEuOTkzQzQ1NS44OTMsMzg1LjU1Nyw0NDEuNTQ1LDM5OS45MTMsNDIzLjkwMSwzOTkuOTEzeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyMy45MDEsMzQzLjkyOGMtMTMuMjMxLDAtMjMuOTk1LDEwLjc2My0yMy45OTUsMjMuOTk0YzAsMTMuMjMxLDEwLjc2NCwyMy45OTQsMjMuOTk1LDIzLjk5NCAgICBjMTMuMjMxLDAsMjMuOTk0LTEwLjc2MywyMy45OTQtMjMuOTk0QzQ0Ny44OTUsMzU0LjY5MSw0MzcuMTMxLDM0My45MjgsNDIzLjkwMSwzNDMuOTI4eiBNNDIzLjkwMSwzODMuOTE4ICAgIGMtOC44MTgsMC0xNS45OTYtNy4xNy0xNS45OTYtMTUuOTk2czcuMTc4LTE1Ljk5NiwxNS45OTYtMTUuOTk2czE1Ljk5Niw3LjE3LDE1Ljk5NiwxNS45OTZTNDMyLjcxOSwzODMuOTE4LDQyMy45MDEsMzgzLjkxOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjQuMTQzLDM1MS45MjZoLTAuMDg2Yy0yLjIwMywwLTMuOTUzLDEuNzg4LTMuOTUzLDMuOTk5YzAsMi4yMSwxLjgyOCwzLjk5OSw0LjAzOSwzLjk5OSAgICBjMi4yMDIsMCwzLjk5OC0xLjc4OSwzLjk5OC0zLjk5OUM0MjguMTQxLDM1My43MTQsNDI2LjM0NSwzNTEuOTI2LDQyNC4xNDMsMzUxLjkyNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjQuMTQzLDM3NS45MmgtMC4wODZjLTIuMjAzLDAtMy45NTMsMS43ODgtMy45NTMsMy45OTlzMS44MjgsMy45OTksNC4wMzksMy45OTljMi4yMDIsMCwzLjk5OC0xLjc4OCwzLjk5OC0zLjk5OSAgICBTNDI2LjM0NSwzNzUuOTIsNDI0LjE0MywzNzUuOTJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDEzLjc1NSwzNTcuOTI0aC0wLjA4NmMtMi4yMDMsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI3LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzQxNy43NTQsMzU5LjcxMyw0MTUuOTU4LDM1Ny45MjQsNDEzLjc1NSwzNTcuOTI0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQzNC41MzEsMzY5LjkyMWgtMC4wODZjLTIuMjAyLDAtMy45NTIsMS43ODktMy45NTIsMy45OTljMCwyLjIxMSwxLjgyOCwzLjk5OSw0LjAzOCwzLjk5OSAgICBjMi4yMDIsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OUM0MzguNTMsMzcxLjcxLDQzNi43MzMsMzY5LjkyMSw0MzQuNTMxLDM2OS45MjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDEzLjc1NSwzNjkuOTIxaC0wLjA4NmMtMi4yMDMsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI3LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzQxNy43NTQsMzcxLjcxLDQxNS45NTgsMzY5LjkyMSw0MTMuNzU1LDM2OS45MjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDM0LjUzMSwzNTcuOTI0aC0wLjA4NmMtMi4yMDIsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI4LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMiwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzQzOC41MywzNTkuNzEzLDQzNi43MzMsMzU3LjkyNCw0MzQuNTMxLDM1Ny45MjR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDI0LjE0MywzNjMuOTIzaC0wLjA4NmMtMi4yMDMsMC0zLjk1MywxLjc4OC0zLjk1MywzLjk5OWMwLDIuMjEsMS44MjgsMy45OTksNC4wMzksMy45OTkgICAgYzIuMjAyLDAsMy45OTgtMS43ODksMy45OTgtMy45OTlDNDI4LjE0MSwzNjUuNzExLDQyNi4zNDUsMzYzLjkyMyw0MjQuMTQzLDM2My45MjN6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTM1Ljk2OSwzMjcuOTMxYy0yMi4wNDksMC0zOS45OSwxNy45NDEtMzkuOTksMzkuOTkxczE3Ljk0MSwzOS45OSwzOS45OSwzOS45OXMzOS45OTEtMTcuOTQsMzkuOTkxLTM5Ljk5ICAgIFMxNTguMDE5LDMyNy45MzEsMTM1Ljk2OSwzMjcuOTMxeiBNMTM1Ljk2OSwzOTkuOTEzYy0xNy42NDQsMC0zMS45OTItMTQuMzU2LTMxLjk5Mi0zMS45OTJjMC0xNy42MzcsMTQuMzQ4LTMxLjk5MywzMS45OTItMzEuOTkzICAgIHMzMS45OTIsMTQuMzU3LDMxLjk5MywzMS45OTNDMTY3Ljk2MiwzODUuNTU3LDE1My42MTQsMzk5LjkxMywxMzUuOTY5LDM5OS45MTN6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTM1Ljk2OSwzNDMuOTI4Yy0xMy4yMzEsMC0yMy45OTQsMTAuNzYzLTIzLjk5NCwyMy45OTRjMCwxMy4yMzEsMTAuNzYzLDIzLjk5NCwyMy45OTQsMjMuOTk0ICAgIHMyMy45OTUtMTAuNzYzLDIzLjk5NS0yMy45OTRDMTU5Ljk2NCwzNTQuNjkxLDE0OS4yLDM0My45MjgsMTM1Ljk2OSwzNDMuOTI4eiBNMTM1Ljk2OSwzODMuOTE4ICAgIGMtOC44MTgsMC0xNS45OTYtNy4xNy0xNS45OTYtMTUuOTk2czcuMTc4LTE1Ljk5NiwxNS45OTYtMTUuOTk2czE1Ljk5Nyw3LjE3LDE1Ljk5NywxNS45OTZTMTQ0Ljc4NywzODMuOTE4LDEzNS45NjksMzgzLjkxOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xMzYuMjExLDM1MS45MjZoLTAuMDg2Yy0yLjIwMiwwLTMuOTUyLDEuNzg4LTMuOTUyLDMuOTk5YzAsMi4yMSwxLjgyOCwzLjk5OSw0LjAzOCwzLjk5OSAgICBjMi4yMDMsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OUMxNDAuMjEsMzUzLjcxNCwxMzguNDE0LDM1MS45MjYsMTM2LjIxMSwzNTEuOTI2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTEzNi4yMTEsMzc1LjkyaC0wLjA4NmMtMi4yMDIsMC0zLjk1MiwxLjc4OC0zLjk1MiwzLjk5OXMxLjgyOCwzLjk5OSw0LjAzOCwzLjk5OWMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5ICAgIFMxMzguNDE0LDM3NS45MiwxMzYuMjExLDM3NS45MnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xMjUuODIzLDM1Ny45MjRoLTAuMDg2Yy0yLjIwMywwLTMuOTUyLDEuNzg5LTMuOTUyLDMuOTk5YzAsMi4yMTEsMS44MjcsMy45OTksNC4wMzgsMy45OTkgICAgYzIuMjAyLDAsMy45OTktMS43ODgsMy45OTktMy45OTlDMTI5LjgyMiwzNTkuNzEzLDEyOC4wMjUsMzU3LjkyNCwxMjUuODIzLDM1Ny45MjR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTQ2LjU5OSwzNjkuOTIxaC0wLjA4NmMtMi4yMDMsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI3LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzE1MC41OTgsMzcxLjcxLDE0OC44MDEsMzY5LjkyMSwxNDYuNTk5LDM2OS45MjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTI1LjgyMywzNjkuOTIxaC0wLjA4NmMtMi4yMDMsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI3LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMiwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzEyOS44MjIsMzcxLjcxLDEyOC4wMjUsMzY5LjkyMSwxMjUuODIzLDM2OS45MjF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTQ2LjU5OSwzNTcuOTI0aC0wLjA4NmMtMi4yMDMsMC0zLjk1MiwxLjc4OS0zLjk1MiwzLjk5OWMwLDIuMjExLDEuODI3LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5QzE1MC41OTgsMzU5LjcxMywxNDguODAxLDM1Ny45MjQsMTQ2LjU5OSwzNTcuOTI0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTEzNi4yMTEsMzYzLjkyM2gtMC4wODZjLTIuMjAyLDAtMy45NTIsMS43ODgtMy45NTIsMy45OTljMCwyLjIxLDEuODI4LDMuOTk5LDQuMDM4LDMuOTk5ICAgIGMyLjIwMywwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5QzE0MC4yMSwzNjUuNzExLDEzOC40MTQsMzYzLjkyMywxMzYuMjExLDM2My45MjN6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTkuOTk2LDM2Ny45MjJjLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OXYxNS45OTZjMCwyLjIxMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OSAgICBjMi4yMTEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OXYtMTUuOTk2QzIzLjk5NSwzNjkuNzEsMjIuMjA3LDM2Ny45MjIsMTkuOTk2LDM2Ny45MjJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjI3Ljk0NywyNzEuOTQ0Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTl2MzEuOTkyYzAsMi4yMTEsMS43ODksMy45OTksMy45OTksMy45OTkgICAgYzIuMjEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OXYtMzEuOTkyQzIzMS45NDYsMjczLjczMywyMzAuMTU3LDI3MS45NDQsMjI3Ljk0NywyNzEuOTQ0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI0My45NDMsMjcxLjk0NGMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djMxLjk5MmMwLDIuMjExLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5di0zMS45OTJDMjQ3Ljk0MiwyNzMuNzMzLDI0Ni4xNTMsMjcxLjk0NCwyNDMuOTQzLDI3MS45NDR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQzLjk0MywyNzEuOTQ0aC0xNS45OTZjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloMTUuOTk2ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5QzI0Ny45NDIsMjczLjczMywyNDYuMTUzLDI3MS45NDQsMjQzLjk0MywyNzEuOTQ0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIzNS45NDUsMjYzLjk0NmMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djcuOTk4YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWMyLjIxMSwwLDMuOTk5LTEuNzg5LDMuOTk5LTMuOTk5ICAgIHYtNy45OThDMjM5Ljk0NCwyNjUuNzM1LDIzOC4xNTUsMjYzLjk0NiwyMzUuOTQ1LDI2My45NDZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTk1Ljk1NSwyNzEuOTQ0Yy0yLjIxMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djMxLjk5MmMwLDIuMjExLDEuNzg4LDMuOTk5LDMuOTk5LDMuOTk5ICAgIGMyLjIxLDAsMy45OTktMS43ODgsMy45OTktMy45OTl2LTMxLjk5MkMxOTkuOTU0LDI3My43MzMsMTk4LjE2NSwyNzEuOTQ0LDE5NS45NTUsMjcxLjk0NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMTEuOTUxLDI3MS45NDRjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OXYzMS45OTJjMCwyLjIxMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OSAgICBjMi4yMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5di0zMS45OTJDMjE1Ljk1LDI3My43MzMsMjE0LjE2MSwyNzEuOTQ0LDIxMS45NTEsMjcxLjk0NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMTEuOTUxLDI3MS45NDRoLTE1Ljk5NmMtMi4yMTEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODgsMy45OTksMy45OTksMy45OTloMTUuOTk2ICAgIGMyLjIxLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMjE1Ljk1LDI3My43MzMsMjE0LjE2MSwyNzEuOTQ0LDIxMS45NTEsMjcxLjk0NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMDMuOTUzLDI2My45NDZjLTIuMjExLDAtMy45OTksMS43ODktMy45OTksMy45OTl2Ny45OThjMCwyLjIxLDEuNzg4LDMuOTk5LDMuOTk5LDMuOTk5YzIuMjEsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OSAgICB2LTcuOTk4QzIwNy45NTIsMjY1LjczNSwyMDYuMTYzLDI2My45NDYsMjAzLjk1MywyNjMuOTQ2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIxMS45NTEsMjg3Ljk0aC0xNS45OTZjLTIuMjExLDAtMy45OTksMS43ODktMy45OTksMy45OTljMCwyLjIxMSwxLjc4OCwzLjk5OSwzLjk5OSwzLjk5OWgxNS45OTYgICAgYzIuMjEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OUMyMTUuOTUsMjg5LjcyOSwyMTQuMTYxLDI4Ny45NCwyMTEuOTUxLDI4Ny45NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik03NS45NTIsMzA3LjQzNmwtMy45OTktMzEuOTkzYy0wLjI3NC0yLjE5NS0yLjM0NC0zLjcwMi00LjQ2OC0zLjQ2OGMtMi4xODgsMC4yNzQtMy43NDEsMi4yNzQtMy40NjgsNC40NjhsMy45OTksMzEuOTkyICAgIGMwLjI1LDIuMDE2LDEuOTc2LDMuNDk5LDMuOTYsMy40OTljMC4xNzIsMCwwLjMzNi0wLjAxNSwwLjUwOC0wLjAzMUM3NC42NzEsMzExLjYyOSw3Ni4yMjUsMzA5LjYzLDc1Ljk1MiwzMDcuNDM2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTkyLjQ3OSwyNzEuOTc1Yy0yLjE5Ni0wLjIzNC00LjE5NSwxLjI3NC00LjQ2OCwzLjQ2OGwtMy45OTksMzEuOTkzYy0wLjI3MywyLjE5NSwxLjI4MSw0LjE5NCwzLjQ2OCw0LjQ2NyAgICBjMC4xNzIsMC4wMTUsMC4zMzYsMC4wMzEsMC41MDgsMC4wMzFjMS45ODQsMCwzLjcxLTEuNDgzLDMuOTYtMy40OTlsMy45OTktMzEuOTkyQzk2LjIyLDI3NC4yNDgsOTQuNjY2LDI3Mi4yNDgsOTIuNDc5LDI3MS45NzV6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNOTUuOTc4LDI3MS45NDRINjMuOTg2Yy0yLjIxMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMSwxLjc4OCwzLjk5OSwzLjk5OSwzLjk5OWgzMS45OTIgICAgYzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTlDOTkuOTc3LDI3My43MzMsOTguMTg4LDI3MS45NDQsOTUuOTc4LDI3MS45NDR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNODQuOTQ5LDI1Ni4wNjljLTIuMTg3LTAuNTM1LTQuMzE5LDAuNzYyLTQuODUsMi45MDlMNzYuMSwyNzQuOTc0Yy0wLjUzMSwyLjE0MSwwLjc2NSw0LjMxMiwyLjkxMyw0Ljg0MyAgICBjMC4zMjgsMC4wODYsMC42NDksMC4xMjUsMC45NjksMC4xMjVjMS43OTcsMCwzLjQyOS0xLjIxMSwzLjg4Mi0zLjAzbDMuOTk5LTE1Ljk5NkM4OC4zOTQsMjU4Ljc3NSw4Ny4wOTcsMjU2LjYwNCw4NC45NDksMjU2LjA2OSAgICB6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjY3LjkzNywxMDMuOTg0Yy0yLjIxLDAtMy45OTksMS43ODgtMy45OTksMy45OTljMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5YzE1LjQzNCwwLDI3Ljk5MywxMi41NTksMjcuOTkzLDI3Ljk5MyAgICBjMCwyLjIxLDEuNzg5LDMuOTk5LDQsMy45OTljMi4yMSwwLDMuOTk4LTEuNzg4LDMuOTk4LTMuOTk5QzMwMy45MjgsMTIwLjEyOSwyODcuNzg0LDEwMy45ODQsMjY3LjkzNywxMDMuOTg0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI2Ny45MzcsMTI3Ljk3OGMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWMyLjIwMywwLDMuOTk5LDEuNzkyLDMuOTk5LDMuOTk5ICAgIGMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTljMi4yMTEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OUMyNzkuOTM0LDEzMy4zNiwyNzQuNTUzLDEyNy45NzgsMjY3LjkzNywxMjcuOTc4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI2Ny45MzcsMTAzLjk4NGgtMzkuOTljLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloMzkuOTkgICAgYzIuMjExLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMjcxLjkzNiwxMDUuNzcyLDI3MC4xNDgsMTAzLjk4NCwyNjcuOTM3LDEwMy45ODR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjI3Ljk0NywxMDMuOTg0Yy0yLjIxLDAtMy45OTksMS43ODgtMy45OTksMy45OTl2MzEuOTkyYzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWMyLjIxLDAsMy45OTktMS43ODgsMy45OTktMy45OTkgICAgdi0zMS45OTJDMjMxLjk0NiwxMDUuNzcyLDIzMC4xNTcsMTAzLjk4NCwyMjcuOTQ3LDEwMy45ODR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjY3LjkzNywxMjcuOTc4aC03Ljk5OGMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWg3Ljk5OCAgICBjMi4yMTEsMCwzLjk5OS0xLjc4OSwzLjk5OS0zLjk5OUMyNzEuOTM2LDEyOS43NjcsMjcwLjE0OCwxMjcuOTc4LDI2Ny45MzcsMTI3Ljk3OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNDMuOTQzLDExMS45ODJjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OXYyMy45OTRjMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk5di0yMy45OTRDMjQ3Ljk0MiwxMTMuNzcxLDI0Ni4xNTMsMTExLjk4MiwyNDMuOTQzLDExMS45ODJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNOTkuOTc3LDEwMy45ODRINDMuOTljLTIuMjEsMC0zLjk5OSwxLjc4OC0zLjk5OSwzLjk5OXYyMy45OTRjMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5aDU1Ljk4NyAgICBjMi4yMTEsMCwzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OXYtMjMuOTk0QzEwMy45NzYsMTA1Ljc3MiwxMDIuMTg3LDEwMy45ODQsOTkuOTc3LDEwMy45ODR6IE05NS45NzgsMTI3Ljk3OEg0Ny45OXYtMTUuOTk2aDQ3Ljk4OCAgICBWMTI3Ljk3OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MS45ODksMTI3Ljk3OGMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djcuOTk4YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OWMyLjIxLDAsMy45OTktMS43ODgsMy45OTktMy45OTkgICAgdi03Ljk5OEM1NS45ODgsMTI5Ljc2Nyw1NC4xOTksMTI3Ljk3OCw1MS45ODksMTI3Ljk3OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik05MS45NzksMTI3Ljk3OGMtMi4yMSwwLTMuOTk5LDEuNzg5LTMuOTk5LDMuOTk5djcuOTk4YzAsMi4yMSwxLjc4OSwzLjk5OSwzLjk5OSwzLjk5OXMzLjk5OS0xLjc4OCwzLjk5OS0zLjk5OXYtNy45OTggICAgQzk1Ljk3OCwxMjkuNzY3LDk0LjE4OSwxMjcuOTc4LDkxLjk3OSwxMjcuOTc4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5Ny40ODUsMzE5LjkzMmgtMTMuNTk5Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksNGMwLDIuMjEsMS43ODksMy45OTgsMy45OTksMy45OThoMTMuNTk5ICAgIGMyLjIxLDAsMy45OTktMS43ODgsMy45OTktMy45OThDNTAxLjQ4NCwzMjEuNzIxLDQ5OS42OTUsMzE5LjkzMiw0OTcuNDg1LDMxOS45MzJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDgzLjg4NiwzMTkuOTMyYy0yLjIxLDAtMy45OTksMS43ODktMy45OTksNHYxNS45OTZjMCwyLjIxLDEuNzg5LDMuOTk5LDMuOTk5LDMuOTk5YzIuMjEsMCw0LTEuNzg5LDMuOTk5LTMuOTk5di0xNS45OTYgICAgQzQ4Ny44ODUsMzIxLjcyMSw0ODYuMDk2LDMxOS45MzIsNDgzLjg4NiwzMTkuOTMyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5OS44ODMsMzM1LjkyOGgtMTUuOTk2Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksNGMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloMTUuOTk2ICAgIGMyLjIxLDAsMy45OTktMS43ODksMy45OTktMy45OTlDNTAzLjg4MiwzMzcuNzE3LDUwMi4wOTMsMzM1LjkyOCw0OTkuODgzLDMzNS45Mjh6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjExLjk1MSwxMTEuOTgyaC00Ny45ODljLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODksMy45OTksMy45OTksMy45OTloNDcuOTg5ICAgIGMyLjIxLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMjE1Ljk1LDExMy43NzEsMjE0LjE2MSwxMTEuOTgyLDIxMS45NTEsMTExLjk4MnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMTEuOTUxLDEyNy45NzhoLTE1Ljk5NmMtMi4yMTEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OWMwLDIuMjEsMS43ODgsMy45OTksMy45OTksMy45OTloMTUuOTk2ICAgIGMyLjIxLDAsMy45OTktMS43ODksMy45OTktMy45OTlDMjE1Ljk1LDEyOS43NjcsMjE0LjE2MSwxMjcuOTc4LDIxMS45NTEsMTI3Ljk3OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zOTUuOTA3LDI3MS45NDRjLTIuMjEsMC0zLjk5OSwxLjc4OS0zLjk5OSwzLjk5OXY0Ny45ODljMCwyLjIxLDEuNzg5LDMuOTk4LDMuOTk5LDMuOTk4ICAgIGMyLjIxMSwwLDMuOTk5LTEuNzg4LDMuOTk5LTMuOTk4di00Ny45ODlDMzk5LjkwNiwyNzMuNzMzLDM5OC4xMTgsMjcxLjk0NCwzOTUuOTA3LDI3MS45NDR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzc5LjkxMSwyNzIuOTQ0Yy0yLjIxLDAtMy45OTksMS43ODktMy45OTksMy45OTl2MTQuOTk2YzAsMi4yMTEsMS43ODksMy45OTksMy45OTksMy45OTkgICAgYzIuMjExLDAsMy45OTktMS43ODgsMy45OTktMy45OTl2LTE0Ljk5NkMzODMuOTEsMjc0LjczMywzODIuMTIyLDI3Mi45NDQsMzc5LjkxMSwyNzIuOTQ0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

        </div>

        <?php require '../menu.php' ?>

    <section>
        <div class="caroussel">
            <div> <img src="https://www.streetsurferfoodtruck.com/assets/img/streetsurfer-foodtruck.jpg" alt="fnejk"></div>

            <div> <img src="https://automanager.blob.core.windows.net/wmclients/017224/images/inside%20shortys%20truck%202.jpg" alt="fnejk"></div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
    </section>

    <div class="histoir">

        <h2>Notre food-truck</h2>
        <p>
            Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt. Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet; illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, ut ne quando amare inciperemus eum, quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat. Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias qui honorem amici anteponat suo? Quid? Haec ut omittam, quam graves, quam difficiles plerisque videntur calamitatum societates! Ad quas non est facile inventu qui descendant. Quamquam Ennius recte.
        </p>
    </div>

  <?php require '../footer.php' ?>

    <script src="foodTruck.js"></script>
</body>
</html>
