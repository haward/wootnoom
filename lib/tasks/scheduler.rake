
require 'net/http'

url = URI.parse('http://wootnoom.herokuapp.com/push.php?data=1')
req = Net::HTTP::Get.new(url.to_s)
res = Net::HTTP.start(url.host, url.port) {|http|
  http.request(req)
}
puts res.body
