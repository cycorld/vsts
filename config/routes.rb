Rails.application.routes.draw do
  get 'home/index'

  get 'home/training'

  get 'home/rank'

  resources :ranks, only: [:index, :create]

  root 'home#training'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  # Serve websocket cable requests in-process
  # mount ActionCable.server => '/cable'
end
