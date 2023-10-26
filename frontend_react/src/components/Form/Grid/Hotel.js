import { useFetchHotels } from '../../../hooks/useFetchHotels';
import { HotelItem } from './HotelItem';

export const HotelGrid = () => {

    const { hotels, isLoading } = useFetchHotels( );
    
    return (
        <>
            <h3>Hoteles</h3>
            <p>id - numero habitaciones - nombre - city</p>
            {
                isLoading && ( <h2>Cargando...</h2> )
            }
            

            <div className="card-grid">
                {
                    hotels.map( ( hotel ) => (
                        <HotelItem 
                            key={ hotel.id } 
                            { ...hotel }
                        />
                    ))
                }
                
            </div>

        </>
    )
}