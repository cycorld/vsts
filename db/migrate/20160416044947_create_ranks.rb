class CreateRanks < ActiveRecord::Migration[5.0]
  def change
    create_table :ranks do |t|
      t.string :name
      t.integer :score
      t.boolean :is_visible, default: true
      t.integer :abusing_cnt, default: 0

      t.timestamps
    end
  end
end
