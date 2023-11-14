<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalImamResource\Pages;
use App\Filament\Resources\JadwalImamResource\RelationManagers;
use App\Models\JadwalImam;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalImamResource extends Resource
{
    protected static ?string $model = JadwalImam::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama-imam')
                    ->label('Nama Imam')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('waktu-shalat')
                    ->label('Waktu Shalat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal')
                    ->label('Tanggal')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama-imam')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('waktu-shalat'),
                Tables\Columns\TextColumn::make('tanggal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalImams::route('/'),
            'create' => Pages\CreateJadwalImam::route('/create'),
            'edit' => Pages\EditJadwalImam::route('/{record}/edit'),
        ];
    }    
}
