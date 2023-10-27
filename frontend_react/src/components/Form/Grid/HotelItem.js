export const HotelItem = ({ attributes, id }) => {

    return (
      <div className="card">
          <p>{ id } - { attributes.room_number } - { attributes.name } - { attributes.city } </p>
      </div>
    )
  }