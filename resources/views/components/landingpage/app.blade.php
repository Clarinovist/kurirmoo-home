<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>KURIRMOO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="KURIRMOO" name="keywords" />
    <meta content="KURIRMOO" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('assets_landingpage/img/logo-kurirmoo.png') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets_landingpage/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landingpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets_landingpage/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets_landingpage/css/style.css') }}" rel="stylesheet" />

    <style>
        .market-btn {
          display: inline-block;
          padding: 0.3125rem 0.875rem;
          padding-left: 2.8125rem;
          -webkit-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          border: 1px solid #e7e7e7;
          background-position: center left 0.75rem;
          background-color: #fff;
          background-size: 1.5rem 1.5rem;
          background-repeat: no-repeat;
          text-decoration: none;
        }

        .market-btn .market-button-title {
          display: block;
          color: #222;
          font-size: 1.125rem;
        }

        .market-btn .market-button-subtitle {
          display: block;
          margin-bottom: -0.25rem;
          color: #888;
          font-size: 0.75rem;
        }

        .market-btn:hover {
          background-color: #f7f7f7;
          text-decoration: none;
        }

        .apple-btn {
          background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjMmUyZTJlIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiMyZTJlMmUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
        }

        .google-btn {
          background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzVDREFERDsiIHBvaW50cz0iMjkuNTMsMCAyOS41MywyNTEuNTA5IDI5LjUzLDUxMiAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNCREVDQzQ7IiBwb2ludHM9IjM2OS4wNjcsMTgwLjU0NyAyNjIuMTc1LDExOS40NjcgMjkuNTMsMCAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNEQzY4QTE7IiBwb2ludHM9IjI5LjUzLDUxMiAyOS41Myw1MTIgMjYyLjE3NSwzODMuNTUxIDM2OS4wNjcsMzIyLjQ3IDI5OS4wMDQsMjUxLjUwOSAiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0E5NjsiIGQ9Ik0zNjkuMDY3LDE4MC41NDdsLTcwLjA2Myw3MC45NjFsNzAuMDYzLDcwLjk2MWwxMDguNjg4LTYyLjg3N2M2LjI4OC0zLjU5Myw2LjI4OC0xMS42NzcsMC0xNS4yNyAgTDM2OS4wNjcsMTgwLjU0N3oiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
        }

        .windows-btn {
          background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMC4xNzYsMjI0TDAuMDAxLDY3Ljk2M2wxOTItMjYuMDcyVjIyNEgwLjE3NnogTTIyNC4wMDEsMzcuMjQxTDQ3OS45MzcsMHYyMjRIMjI0LjAwMVYzNy4yNDF6IE00NzkuOTk5LDI1NmwtMC4wNjIsMjI0ICAgbC0yNTUuOTM2LTM2LjAwOFYyNTZINDc5Ljk5OXogTTE5Mi4wMDEsNDM5LjkxOEwwLjE1Nyw0MTMuNjIxTDAuMTQ3LDI1NmgxOTEuODU0VjQzOS45MTh6IiBmaWxsPSIjMDBiY2YyIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
        }

        .amazon-btn {
          background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGQUJGNjhGNDRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGQUJGNjhGMzRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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);
        }

        .market-btn-light {
          border-color: rgba(255, 255, 255, 0.14);
          background-color: rgba(0, 0, 0, 0);
        }

        .market-btn-light .market-button-title {
          color: #fff;
        }

        .market-btn-light .market-button-subtitle {
          color: rgba(255, 255, 255, 0.6);
        }

        .market-btn-light:hover {
          background-color: rgba(255, 255, 255, 0.06);
        }

        .market-btn-light.apple-btn {
          background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
        }

        .market-btn-light.amazon-btn {
          background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjFCQzQ2QjRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjFCQzQ2QTRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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);
        }
      </style>

      <style>
        .video-container {
          position: relative;
          padding-bottom: 56.25%;
          padding-top: 30px;
          height: 0;
          overflow: hidden;
        }


        .video-container iframe,
        .video-container object,
        .video-container embed {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      </style>
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-danger" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

   <!-- Navbar Start -->
  <div class="container-fluid sticky-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a href="/" class="navbar-brand">
          <!-- <img src="img/logo-kurirmoo.png" alt="" width="80px"> -->
          <h1 class="text-white">Kurirmoo<span class="text-dark">.</span></h1>
        </a>
        <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#about-us" class="nav-item nav-link">Tentang Kami</a>
            <a href="#Keunggulan" class="nav-item nav-link">Keunggulan</a>
            <a href="#armada" class="nav-item nav-link">Armada</a>
            <a href="#tutor_aplikasi" class="nav-item nav-link">Tutorial Aplikasi</a>
            <a href="#footer" class="nav-item nav-link">Kontak</a>
          </div>
          <!-- <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->


    {{ $slot }}

   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-white-50 footer pt-5" id="footer">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
          <a href="/" class="d-inline-block mb-3">
            <h1 class="text-white">Kurirmoo<span class="text-primary">.</span></h1>
          </a>
          <p class="mb-0">YOUR DIGITAL LOGISTICS SOLUTION</p>
        </div>
        <div class="col-md-4 col-lg-3 wow fadeIn float-end" data-wow-delay="0.3s">
          <h5 class="text-white mb-4">Alamat</h5>
          <p><i class="fa fa-map-marker-alt me-3"></i>Surakarta</p>
          <p><i class="fa fa-phone-alt me-3"></i>089534103230</p>
          <p><i class="fa fa-envelope me-3"></i>admin@kurirmoo.com</p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-google"></i></a>
            <a class="btn btn-outline-light btn-social " href=""><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
          <h5 class="text-white mb-4">Popular Link</h5>
          <a class="btn btn-link" href="#about-us">About Us</a>
          <a class="btn btn-link" href="{{ asset('assets_landingpage/img/docs/Kebijakan Privasi.pdf')}}" download="Privacy Polish Kurirmoo" target="_blank">Privacy Policy</a>
          <a class="btn btn-link" href="{{ asset('assets_landingpage/img/docs/S&K_Kurirmoo.pdf')}}" download="SK Kurirmoo" target="_blank">Syarat dan Ketentuan</a>
        </div>
        <div class="col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
          <img class="img-fluid" src="{{ asset('assets_landingpage/img/logo-footer.png')}}" alt="" width="600px" />
        </div>
      </div>
    </div>
    <div class="container wow fadeIn" data-wow-delay="0.1s">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">Kurirmoo</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets_landingpage/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets_landingpage/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets_landingpage/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets_landingpage/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets_landingpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets_landingpage/js/main.js') }}"></script>
  </body>
</html>