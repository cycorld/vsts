class CreateRanks < ActiveRecord::Migration[5.0]
  def change
    create_table :ranks do |t|
      t.string :name
      t.integer :score
      t.boolean :is_visible
      t.integer :abusing_cnt

      t.timestamps
    end
  end
end
