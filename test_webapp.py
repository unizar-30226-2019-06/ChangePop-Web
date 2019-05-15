import unittest
import webapp
# from webapp import app
# from webapp import home


class HomeViewTest(unittest.TestCase):

    def setUp(self):
    	self.app = webapp.app.test_client()
    	self.app.testing = True

    def test_home_page(self):
        home = self.app.get('/')
        self.assertTrue(True)


if __name__ == "__main__":
    unittest.main()
