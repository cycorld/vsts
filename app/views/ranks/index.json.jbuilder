json.array!(@ranks) do |rank|
  json.extract! rank, :id, :name, :score, :is_visible, :abusing_cnt
  json.url rank_url(rank, format: :json)
end
