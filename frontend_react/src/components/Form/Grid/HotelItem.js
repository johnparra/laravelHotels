export const HotelItem = ({ city, name, room_number, id }) => {

    return (
      <div className="card">
          <p>{ id } - { room_number } - { name } - { city } </p>
      </div>
    )
  }