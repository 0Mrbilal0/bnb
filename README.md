# BnB platform

## Entities

### User

This entity represents a review made by a traveler to a booking for a room.

| Property   | Type      | Description          | Relation |
|------------|-----------|----------------------|----------|
| title      | string    | 50 NOT NULL          |          |
| comment    | text      | NOT NULL             |          |
| rating     | integer   | NOT NULL             |          |
| created_at | datetime  | NOT NULL             |          |
| traveler   | ManyToOne | NOT NULL, OrphanTrue | User     |
| rooms      | ManyToOne | NOT NULL, OrphanTrue | Room     |
| booking    | OnToOne   | NOT NULL, OrphanTrue | Booking  |

### Booking

This entity represents a booking made by a traveler to a room.

| Property   | Type      | Description          | Relation |
|------------|-----------|----------------------|----------|
| number     | string    | 50 NOT NULL          |          |
| check_in   | text      | NOT NULL             |          |
| check_out  | integer   | NOT NULL             |          |
| occupants  | integer   | NOT NULL             |          |
| created_at | datetime  | NOT NULL             |          |
| traveler   | ManyToOne | NOT NULL, OrphanTrue | User     |
| room       | ManyToOne | NULL, OrphanTrue     | Room     |
| review     | OneToOne  | NULL, OrphanTrue     | Review   |

### Equipment

This entity represents the equipment for a room.

| Property | Type       | Description | Relation |
|----------|------------|-------------|----------|
| name     | string     | 50 NOT NULL |          |
| rooms    | ManyToMany |             | Room     |
