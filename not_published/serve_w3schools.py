import http.server
import socketserver

PORT = 8000

class CustomHandler(http.server.SimpleHTTPRequestHandler):
    def guess_type(self, path):
        # Serve .php and .asp files as HTML so the browser renders them instead of downloading them
        if path.endswith('.php') or path.endswith('.asp'):
            return 'text/html'
        return super().guess_type(path)

if __name__ == "__main__":
    with socketserver.TCPServer(("", PORT), CustomHandler) as httpd:
        print(f"Serving at port {PORT}. Open http://localhost:{PORT} in your browser.")
        httpd.serve_forever()
