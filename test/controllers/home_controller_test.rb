require 'test_helper'

class HomeControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get home_index_url
    assert_response :success
  end

  test "should get training" do
    get home_training_url
    assert_response :success
  end

  test "should get rank" do
    get home_rank_url
    assert_response :success
  end

end
